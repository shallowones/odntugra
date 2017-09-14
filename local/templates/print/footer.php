
<div id="footer">
    <div class="footer-line-copy">
	      <? $APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        ".default",
                        array(
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "inc",
                            "AREA_FILE_RECURSIVE" => "",
                            "EDIT_TEMPLATE" => "",
                            "COMPONENT_TEMPLATE" => ".default",
                            "PATH" => SITE_TEMPLATE_PATH . "/include/footer.html"
                        ),
                        false
                    ); ?>
	</div>
</div>



</div><!-- #page -->
</body>
</html>