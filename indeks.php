<?php
require_once("function/callpage.php");
callPage("contact");
callPage("index");
if (isset($_GET["page"])) {
    callPage($_GET["page"]);
} else {
    callPage("projects");
}
callPage("resume");

?>