<?php
function getModuleContent($position){
    $db = JFactory::getDbo();
    $query = $db->getQuery(true);
    $query->select($db->quoteName('content'))
        ->from($db->quoteName('#__modules'))
        ->where($db->quoteName('position') . ' = '. $db->quote($position) . ' AND ' . $db->quoteName('published') . ' = 1')
        ->order('id');
    $db->setQuery($query);
    return $db->loadResult(); // Result, loadAssoc, ArrayList, Column, Row, RowList
}

function handleMainMenu($position){
    $content=preg_replace('/<p/i','<nav', getModuleContent($position));
    $content=preg_replace('/<\/p>/i','</nav>', $content);
    $content=preg_replace('/">/i','"><div><div>', $content);
    $content=preg_replace('/<\/a>/i','</div></div></a>', $content);
    echo $content;
}

