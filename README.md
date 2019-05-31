# Codeigniter Template
Template is a library for CodeIgniter that helps in building complex views in a simple way.


## Installation
1. [download](https://github.com/victordanilo/codeigniter-template/archive/V1.0.0-beta.zip) source code.
2. copy files to corresponding folders.
3. load library in autoload or controller.


## Requirements 
- CodeIgniter >= 2.2.6
- PHP         >= 5.6


## Configuration
To change settings, simply edit the file `application/config/template.php`, it is also possible to do directly in your controller passing a array with settings for method ` $this->template->initialize($config)` or by methods ` $this->template->set_parser(bool)` and ` $this->template->set_template(string)`.<br>
Example (config file):
```php
<?php
/**
* if you want your view file to be parsed, set value to TRUE.
* @type bool
*/
$config['parser'] = false;

/**
* if you want to compress the html output, set to TRUE
* @type bool
*/
$config['compress'] = true;

/**
* template name.
* @type string
*/  
$config['template'] = null;
```

Example (controller with configuration array):
```php
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class My_Controller extends CI_Controller
{
    public function index()
    {
        // code...
        $config['parser'] = true;  
        $config['template'] = 'templateName';
        $this->template->initialize($config);
        // code...
    }
}
```

Example (controller with setters methods):
```php
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class My_Controller extends CI_Controller
{
    public function index()
    {
        // code...
        $this->template->set_parser(true);
        $this->template->set_compress(false);
        $this->template->set_template('templateName');
        // code...
    }

    // or

    public function setting()
    {
        // code...
        $this->template
                        ->set_parser(false)
                        ->set_compress(true)
                        ->set_template('templateName');
        // code...
    }
}
```


## How to use
#### Base Template
When a view is set as base template, it loads and partial views are passed to it as data.<br>
Example:
```html
<!DOCTYPE html>
<html>
    <head>
            <?= $this->template->metadata; ?>
            <?= $this->template->title; ?>
            <?= $this->template->stylesheet; ?>
            <?= $this->template->javascript; ?>
    </head>
    <body>
            <?= $this->template->content ?>
    </body>
</html>
```
#### Template Parser
The template parser is made through Template Parser Library, native to CodeIgniter. The parser is done in your view files, executing the substitution of pseudo-variables defined between keys by simple texts. [see more information!](https://www.codeigniter.com/user_guide/libraries/parser.html).
```html
<!DOCTYPE html>
<html>
    <head>
        {metadata}
        {title}
        {stylesheet}
        {javascript}
    </head>
    <body>
        {content}
    </body>
 </html>
```

#### Actions for Tags
actions for tags help you create special tags of header simply and quickly, it is possible using threaded methods to make the process even simpler.  
###### Metadata
```php
$this->template->metadata
                         ->add('description','My great Site')
                         ->add_first('keywords','CodeIgniter, library, php')
                         ->add('robots','no-cache');
```  
###### Stylesheet
```php
$this->template->stylesheet
                           ->add('theme.css')
                           ->add('style.css')
                           ->add_first('bootstrap.css');
```
###### Javascript
```php
$this->template->javascript  
                           ->add('jquery.js')
                           ->add('bootstrap.js')
                           ->add('helps.js');
```

#### Actions for Title
actions for title makes the title definition even simpler, just set the title once with the method ` $this->template->title->set_title($name)`, it will be sustained until it is reset, independent of controlle or view, if necessary to define a segment title does not need to redefine title, just define a segment title with method ` $this->template->title->set_segment($name)` which will be appended with a separator after current title.  
Example:
```php
 $this->template->title->set('My Site');
 // result: <title> My Site </title>

 $this->template->title->set_segment('Setting');
 // result: <title> My Site - Setting </title>
```

#### Actions for Content
actions for content are responsible for loading the partial views that will be passed to template. if there is no set template, views will be directly rendered. To load a view use the method ` $this->template->content->add($view, $data, $parser)` or method ` $this->template->content->add_first($view, $data, $parser)` which will load view at the beginning of the queue.<br>
Example:
```php
$this->template->content
                        ->add('viewPath',$data)
                        ->add('viewPath',$data,true)
                        ->add_firt('viewPath');
```
actions for content organizes the views into sections, It can contain one or several views by sections, if a section is not defined, views are added to a default section, to define a section use the method `$this->template->content->section(‘mysection’)`, when a section is defined it is set to `current_section`, for certain section manipulations it is necessary first that the section be set as `current_section`.<br>
Example:
```php
$this->template->content
                        ->section('header')
                            ->add('navbar',$navs)
                            ->add('slide',$slides)
                        ->section('content')
                            ->add('sidebar',$sidebar)
                            ->add('cards',$cads)
                            ->add('adsense',$adsense)
                            ->add('list_chat',$users)
                        ->section('footer')
                            ->add('contact_me');
```
there are some methods for sections manipulation:
- **first($section)**   - move ` $section` to beginning of queue
- **last($section)**    - move ` $section` for end of queue
- **after($section)**   - move `_current_section` for after of ` $section`
- **before($section)**  - move a `_current_section` for before of ` $section`
- **get($section)**     - get value of ` $section`
- **get_all()**         - get value of all sections
- **remove($section)**  - remove  ` $section`
- **remove_all()**      - remove all sections <br>
Example:
```php
$this->template->content
                        ->last('contact_me')
                        ->section('sidebar')->after('header')
                        ->section('adsense')->before('content')
                        ->first('navbar-top');
```

#### JS Dataset Injector
Inject variables or json from the backend in a simple and elegant way. <br>
Example:
```php
$setting = ['theme' => 'dark', 'profile' => $user];
$this->template->add('setting', $setting);
$this->template->add_global('token', $token);   
```

#### Renderization
template rendering is done using method ` $this->template->render(string $view, array $data, bool $parse)`, the parameters to be passed are optional. if a `$view` is passed to rendering method, it will be added to the partial views queue. if there is no set template it will be directly rendered. there is also a method for rendering json type ` $this->template->render_json(array $data)`, targeting ajax requests.

#### More Examples
See more example use of library [here](https://github.com/victordanilo/codeigniter-template/tree/master/examples).


## Licença
The MIT license. please, see the [license file](https://github.com/victordanilo/codeigniter-template/blob/master/LICENSE) for more information.