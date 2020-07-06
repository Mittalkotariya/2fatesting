
 <div id="mo2f_2fa_intro" class = "modal" style="display: block;">
            <div id="mo2f_2fa_intro_modal" class="modal-content" style="width: 30%;overflow: hidden;" >

            <div class="modal-header">
               <h2 class="modal-title" style="text-align: center; font-size: 20px; color: #2980b9">
                    Ready to go <span id="closeintromodal" class="modal-span-close" onclick="skipintro();">X</span>
                </h2>
            <!-- <span class="modal-span-close" id="closeConfirmCloud">&times;</span> -->

<!--                 <span id="closeConfirmCloud" class="modal-span-close">X</span>
 -->       </div>

            <div class="modal-body" style="height: auto;background-color: beige;">

                <div >
                    <h3 style="color: red;text-align: center;">User Two Factor enrollment is enabled and administrators can setup Two factor on next login. You can logout and get the same experience as your users.</h3>
                    <h3 style="color: red;"><span style="text-decoration: underline;color:black;">Configure Myself</span> : You can logout and get the same experience as your users. </h3>
                    <h3 style="color: red;"><span style="text-decoration: underline;color:black;">Logout</span> : You can logout and get the same experience as your users. </h3>

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="mo_wpns_button mo_wpns_button1 modal-button" style="width: 40%;background-color:#ff4168;" onclick="skipintro();">Configure Myself</button>
                <button type="button" class="mo_wpns_button mo_wpns_button1 modal-button" style="width: 40%;background-color:#61ace5;" title="Logout and check the user experience" onclick="mo2f_userlogout()">Logout Now</button>
            </div>
            </div>
        </div>
         <form name="f" id="mo2f_skiploginform" method="post" action="">
             <input type="hidden" name="mo2f_skiplogin_nonce" value="<?php echo wp_create_nonce( 'miniorange-2-factor-skiplogin-failed-nonce' ); ?>"/>
             <input type="hidden" name="option" value="mo2f_skiplogin"/>
         </form>
        <form name="f" id="mo2f_userlogoutform" method="post" action="">
             <input type="hidden" name="mo2f_userlogout_nonce" value="<?php echo wp_create_nonce( 'miniorange-2-factor-userlogout-failed-nonce' ); ?>"/>
             <input type="hidden" name="option" value="mo2f_userlogout"/>
         </form>
 <script>
     function mo2f_userlogout() {
         jQuery("#mo2f_userlogoutform").submit();
     }

     function skipintro() {
         jQuery("#mo2f_skiploginform").submit();
     }
     jQuery('#closeConfirmCloud1').click(function(){
         jQuery('#mo2f_2fa_intro').css('display', 'none');

     });
     jQuery('#ConfirmCloudButton1').click(function(){
         document.getElementById('mo2f_2fa_intro').checked = false;
         document.getElementById('mo2f_2fa_intro_modal').style.display = "none";
         var nonce = '<?php echo wp_create_nonce("singleUserNonce");?>';
         var data = {
             'action'                    : 'mo_two_factor_ajax',
             'mo_2f_two_factor_ajax'     : 'mo2f_single_user',
             'nonce' :  nonce

         };
         jQuery.post(ajaxurl, data, function(response) {
             if(response == 'true')
             {
                 location.reload(true);
                 //jQuery('#mo2f_save_free_plan_auth_methods_form').submit();


             }
             else
             {
                 jQuery('#mo2f_2fa_intro').css('display', 'none');
                 jQuery('#mo_scan_message').empty();
                 jQuery('#mo_scan_message').append("<div id='notice_div' class='overlay_error'><div class='popup_text'>&nbsp&nbsp <b>You are not authorized to perform this action</b>. Only <b>"+response+"</b> is allowed. For more details contact miniOrange.</div></div>");
                 window.onload =  nav_popup();
             }
         });

     });
     </script>