<div id="prevent-dialog" style="display: none;">
    <div class="content">
        <div class="cont">
            <h2 class="track"><?php echo $this->TR->__('content.speedbumptitle', 'Welcome to the IHG Digital Rewards Club'); ?></h2>
            <div>
                <div class="download-now-tip tip" style="padding-bottom: 4px;">
                    <?php echo $this->TR->__('content.speedbump1', ''); ?>
                </div>
                <div style="border:1px solid #bbb; padding:5px;">
                    <?php echo $this->TR->__('content.speedbump2', 'NOTE: Content availability subject to licensing restrictions in various countries.'); ?>
                </div>
            </div>
        </div>
        <div class="clear"></div>

        <div class="ctacontainer" style="margin-top:20px;clear:both;float:right;">
            <button class="btn btn-st3 primary-cta" value="" id="go-home" autofocus="autofocus">
                <span><span><?php echo $this->TR->__('content.proceed', 'Proceed') ?></span></span>
            </button>
        </div>
    </div>
</div>
<script>
function bindPrevent(){ 
    console.log('test');
    $('#loading-box').on('click', '#go-home', function(){
        Main.closeDialog();
        return false;
    });
}
</script>