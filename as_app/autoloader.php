<?php
/**
 * Tous les fichiers du dossier Classes
 */
$themedirclasses = __DIR__.'/Classes';
 
$filesiterator = new FilesystemIterator($themedirclasses, FilesystemIterator::SKIP_DOTS);
 
foreach($filesiterator as $file) {
  require $themedirclasses . '/' . $file->getfilename();
}