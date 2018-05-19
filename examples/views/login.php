<?php
// Example of loading additional components
$this->template->javascript
                           ->add('https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.8.1/parsley.min.js')
                           ->add('login.js');
?>
<div class="uk-section uk-section-primary uk-preserve-color" uk-height-viewport>
    <div class="uk-position-center" uk-grid>
        <div class="uk-card uk-card-default uk-card-body">
            <form>
                <div class="uk-margin">
                    <h4 class="uk-text-center uk-text-muted">Login</h4>
                </div>
                <div class="uk-margin">
                    <div class="uk-inline">
                        <span class="uk-form-icon" uk-icon="icon: user"></span>
                        <input class="uk-input" type="text">
                    </div>
                </div>
                <div class="uk-margin">
                    <div class="uk-inline">
                        <span class="uk-form-icon" uk-icon="icon: lock"></span>
                        <input class="uk-input" type="text">
                    </div>
                </div>
                <div class="uk-flex uk-flex-center">
                    <button class="uk-button uk-button-default">ENTER</button>
                </div>
            </form>
        </div>
    </div>
</div>