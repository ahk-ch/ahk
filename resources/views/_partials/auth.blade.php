<div class="cd-user-modal"> <!-- this is the entire modal form, including the background -->
    <div class="cd-user-modal-container"> <!-- this is the container wrapper -->
        <ul class="cd-switcher">
            <li><a href="javascript:void(0);">{!! trans('ahk.login') !!}</a></li>
            <li><a href="javascript:void(0);">{!! trans('ahk.register') !!}</a></li>
        </ul>

        <div id="cd-login"> <!-- log in form -->
            <form class="cd-form">
                <p class="social-login">
                    <span class="social-login-facebook"><a href="#"><i class="fa fa-facebook"></i> Facebook</a></span>
                    <span class="social-login-google"><a href="#"><i class="fa fa-google"></i> Google</a></span>
                    <span class="social-login-twitter"><a href="#"><i class="fa fa-twitter"></i> Twitter</a></span>
                </p>

                <div class="lined-text"><span>{!! trans('ahk.or_use_your_account') !!} on Unify</span>
                    <hr>
                </div>

                <p class="fieldset">
                    <label class="image-replace cd-email" for="signin-email">E-mail</label>
                    <input class="full-width has-padding has-border" id="signin-email" type="email" placeholder="E-mail">
                    <span class="cd-error-message">Error message here!</span>
                </p>

                <p class="fieldset">
                    <label class="image-replace cd-password" for="signin-password">Password</label>
                    <input class="full-width has-padding has-border" id="signin-password" type="text" placeholder="Password">
                    <a href="javascript:void(0);" class="hide-password">{!! trans('ahk.hide') !!}</a>
                    <span class="cd-error-message">Error message here!</span>
                </p>

                <p class="fieldset">
                    <input type="checkbox" id="remember-me" checked>
                    <label for="remember-me">{!! trans('ahk.remember_me') !!}</label>
                </p>

                <p class="fieldset">
                    <input class="full-width" type="submit" value="{!! trans('ahk.login') !!}">
                </p>
            </form>

            <p class="cd-form-bottom-message">
                <a href="javascript:void(0);">{!! trans('ahk.forgot_your_password') !!}</a></p>
            <!-- <a href="javascript:void(0);" class="cd-close-form">Close</a> -->
        </div> <!-- cd-login -->

        <div id="cd-signup"> <!-- sign up form -->
            <form class="cd-form">
                <p class="social-login">
                    <span class="social-login-facebook"><a href="#"><i class="fa fa-facebook"></i> Facebook</a></span>
                    <span class="social-login-google"><a href="#"><i class="fa fa-google"></i> Google</a></span>
                    <span class="social-login-twitter"><a href="#"><i class="fa fa-twitter"></i> Twitter</a></span>
                </p>

                <div class="lined-text"><span>{!! trans('ahk.or_register_your_new_account_on') !!} Unify</span>
                    <hr>
                </div>

                <p class="fieldset">
                    <label class="image-replace cd-username" for="signup-username">{!! trans('ahk.username') !!}</label>
                    <input class="full-width has-padding has-border" id="signup-username" type="text" placeholder="{!! trans('ahk.username') !!}">
                    <span class="cd-error-message">Error message here!</span>
                </p>

                <p class="fieldset">
                    <label class="image-replace cd-email" for="signup-email">E-mail</label>
                    <input class="full-width has-padding has-border" id="signup-email" type="email" placeholder="E-mail">
                    <span class="cd-error-message">Error message here!</span>
                </p>

                <p class="fieldset">
                    <label class="image-replace cd-password" for="signup-password">{!! trans('ahk.password') !!}</label>
                    <input class="full-width has-padding has-border" id="signup-password" type="text" placeholder="{!! trans('ahk.password') !!}">
                    <a href="javascript:void(0);" class="hide-password">Hide</a>
                    <span class="cd-error-message">Error message here!</span>
                </p>

                <p class="fieldset">
                    <input type="checkbox" id="accept-terms">
                    <label for="accept-terms">{!! trans('ahk.i_agree_to_the') !!}
                        <a href="page_terms.html">{!! trans('ahk.i_agree_to_the') !!}</a></label>
                </p>

                <p class="fieldset">
                    <input class="full-width has-padding" type="submit" value="{!! trans('ahk.create_account') !!}">
                </p>
            </form>

            <!-- <a href="javascript:void(0);" class="cd-close-form">Close</a> -->
        </div> <!-- cd-signup -->

        <div id="cd-reset-password"> <!-- reset password form -->
            <p class="cd-form-message">{!! trans('ahk.lost_password_prompt_message') !!}</p>

            <form class="cd-form">
                <p class="fieldset">
                    <label class="image-replace cd-email" for="reset-email">E-mail</label>
                    <input class="full-width has-padding has-border" id="reset-email" type="email" placeholder="E-mail">
                    <span class="cd-error-message">Error message here!</span>
                </p>

                <p class="fieldset">
                    <input class="full-width has-padding" type="submit" value="Reset password">
                </p>
            </form>

            <p class="cd-form-bottom-message"><a href="javascript:void(0);">{!! trans('ahk.back_to_login') !!}</a></p>
        </div> <!-- cd-reset-password -->
        <a href="javascript:void(0);" class="cd-close-form">{!! trans('ahk.close') !!}</a>
    </div> <!-- cd-user-modal-container -->
</div> <!-- cd-user-modal -->

