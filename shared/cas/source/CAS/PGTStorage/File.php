<?php

class CAS_PGTStorage_File extends CAS_PGTStorage_AbstractStorage
{
    /**
     * @addtogroup internalPGTStorageFile
     * @{
     */

    /**
     * a string telling where PGT's should be stored on the filesystem. Written by
     * PGTStorageFile::PGTStorageFile(), read by getPath().
     *
     * @private
     */
    var $_path;

    /**
     * This method returns the name of the directory where PGT's should be stored
     * on the filesystem.
     *
     * @return the name of a directory (with leading and trailing '/')
     *
     * @private
     */
    function getPath()
    {
        return $this->_path;
    }

    // ########################################################################
    //  DEBUGGING
    // ########################################################################

    /**
     * This method returns an informational string giving the type of storage
     * used by the object (used for debugging purposes).
     *
     * @return an informational string.
     * @public
     */
    function getStorageType()
    {
        return "file";
    }

    /**
     * This method returns an informational string giving information on the
     * parameters of the storage.(used for debugging purposes).
     *
     * @return an informational string.
     * @public
     */
    function getStorageInfo()
    {
        return 'path=`'.$this->getPath().'\'';
    }

    // ########################################################################
    //  CONSTRUCTOR
    // ########################################################################

    /**
     * The class constructor, called by CAS_Client::SetPGTStorageFile().
     *
     * @param CAS_Client $cas_parent the CAS_Client instance that creates the object.
     * @param string     $path       the path where the PGT's should be stored
     *
     * @return void
     *
     * @public
     */
    function __construct($cas_parent,$path)
    {
        phpCAS::traceBegin();
        // call the ancestor's constructor
        parent::__construct($cas_parent);

        if (empty($path)) {
            $path = CAS_PGT_STORAGE_FILE_DEFAULT_PATH;
        }
        // check that the path is an absolute path
        if (getenv("OS")=="Windows_NT") {

            if (!preg_match('`^[a-zA-Z]:`', $path)) {
                phpCAS::error('an absolute path is needed for PGT storage to file');
            }

        } else {

            if ( $path[0] != '/' ) {
                phpCAS::error('an absolute path is needed for PGT storage to file');
            }

            // store the path (with a leading and trailing '/')
            $path = preg_replace('|[/]*$|', '/', $path);
            $path = preg_replace('|^[/]*|', '/', $path);
        }

        $this->_path = $path;
        phpCAS::traceEnd();
    }

    // ########################################################################
    //  INITIALIZATION
    // ########################################################################

    /**
     * This method is used to initialize the storage. Halts on error.
     *
     * @return void
     * @public
     */
    function init()
    {
        phpCAS::traceBegin();
        // if the storage has already been initialized, return immediatly
        if ($this->isInitialized()) {
            return;
        }
        // call the ancestor's method (mark as initialized)
        parent::init();
        phpCAS::traceEnd();
    }

    // ########################################################################
    //  PGT I/O
    // ########################################################################

    /**
     * This method returns the filename corresponding to a PGT Iou.
     *
     * @param string $pgt_iou the PGT iou.
     *
     * @return a filename
     * @private
     */
    function getPGTIouFilename($pgt_iou)
    {
        phpCAS::traceBegin();
        $filename = $this->getPath()."phpcas-".hash("sha256", $pgt_iou);
//        $filename = $this->getPath().$pgt_iou.'.plain';
        phpCAS::trace("Sha256 filename:" . $filename);
        phpCAS::traceEnd();
        return $filename;
    }

    /**
     * This method stores a PGT and its corresponding PGT Iou into a file. Echoes a
     * warning on error.
     *
     * @param string $pgt     the PGT
     * @param string $pgt_iou the PGT iou
     *
     * @return void
     *
     * @public
     */
    function write($pgt,$pgt_iou)
    {
        phpCAS::traceBegin();
        $fname = $this->getPGTIouFilename($pgt_iou);
        if (!file_exists($fname)) {
            touch($fname);
            // Chmod will fail on windows
            @chmod($fname, 0600);
            if ($f=fopen($fname, "w")) {
                if (fputs($f, $pgt) === false) {
                    phpCAS::error('could not write PGT to `'.$fname.'\'');
                }
                phpCAS::trace('Successful write of PGT to `'.$fname.'\'');
                fclose($f);
            } else {
                phpCAS::error('could not open `'.$fname.'\'');
            }
        } else {
            phpCAS::error('File exists: `'.$fname.'\'');
        }
        phpCAS::traceEnd();
    }

    /**
     * This method reads a PGT corresponding to a PGT Iou and deletes the
     * corresponding file.
     *
     * @param string $pgt_iou the PGT iou
     *
     * @return the corresponding PGT, or FALSE on error
     *
     * @public
     */
    function read($pgt_iou)
    {
        phpCAS::traceBegin();
        $pgt = false;
        $fname = $this->getPGTIouFilename($pgt_iou);
        if (file_exists($fname)) {
            if (!($f=fopen($fname, "r"))) {
                phpCAS::error('could not open `'.$fname.'\'');
            } else {
                if (($pgt=fgets($f)) === false) {
                    phpCAS::error('could not read PGT from `'.$fname.'\'');
                }
                phpCAS::trace('Successful read of PGT to `'.$fname.'\'');
                fclose($f);
            }
            // delete the PGT file
            @unlink($fname);
        } else {
            phpCAS::error('No such file `'.$fname.'\'');
        }
        phpCAS::traceEnd($pgt);
        return $pgt;
    }

    /** @} */

}
?>