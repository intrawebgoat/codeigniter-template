<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?=$this->template->meta;?>
    <?=$this->template->title;?>
    <?=$this->template->stylesheet
                                  ->add('https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.1/css/uikit.min.css');?>
    <?=$this->template->javascript
                                  ->add('https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js')
                                  ->add('https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.1/js/uikit.min.js')
                                  ->add('https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.1/js/uikit-icons.min.js');?>
</head>
<body>
    <?=$this->template->content;?>
</body>
</html>