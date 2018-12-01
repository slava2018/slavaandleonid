<?php
if($_GET)
{
    if($_GET['page'])
    {
        switch ($_GET['page'])
        {
            case "page_list":
                require_once "views/VpageList.php";
                break;
            case "page_add":

                if(!$_POST)
                {
                    require_once "views/VpageAdd.php";
                }
                else
                {
                    $page->prepareAddPage($_POST);
                }
                break;
            case "edit":
                if(!$_POST)
                {
                    require_once "views/VpageEdit.php";
                }
                else
                {
                    $page->EditPage($_GET['id'],$_POST);
                }
                break;
            case "delete":
                {
                    $page->DeletePage($_GET['id']);
                }
                break;
        }


    }


}