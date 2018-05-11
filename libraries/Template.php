<?php
defined('BASEPATH') OR exit('No direct script access allowed');


/**
 * Template Library
 *
 * @package     Template
 * @version     v1.0.0-beta
 * @license     MIT License
 * @author      Victor Danilo, <victordanilo_cs@live.com>
 * @link        https://github.com/victordanilo/codeigniter-template
 */

class Template
{
    private $ci;            /** @var CI_Controller $ci */
    private $_parser;       /** @var bool $_parser */
    private $_template;     /** @var string $_template */

    /**
     * template constructor.
     *
     * @access public
     * @param array $config
     */
    public function __construct($config = array())
    {
        $this->ci        =& get_instance();
        $this->_parser   = false;
        $this->_template = null;

        /** initialize configurations */
        if (!empty($config))
            $this->initialize($config);

        log_message('debug', 'Template Class Initialized');
    }

    /**
     * initialize configurations
     *
     * @access public
     * @param array $config
     * @return Template $this
     */
    public function initialize($config = array())
    {
        foreach ($config as $key => $val)
            $this->{'_'.$key} = $val;
        return $this;
    }

    /**
     * set parser configuration
     *
     * @access public
     * @param bool $bool
     * @return Template $this
     */
    public function set_parser($bool)
    {
        $this->_parser = (bool) $bool;
        $this->loading_parser();
        return $this;
    }

    /**
     * set base template
     * @param string $view
     * @return Template $this
     */
    public function set_template($view)
    {
        $this->_template = (string) $view;
        return $this;
    }

    /**
     * template rendering
     *
     * @param string $view
     * @param array $data
     * @param bool $parser
     */
    public function render($view = null, $data = array(), $parser = false)
    {
        $out = null;

        if (!empty($view))
            $out = $this->load_view($view, $data, $parser);

        if (!empty($this->_template)) {
            $data['content'] = $out;
            $out = $this->load_view($this->_template, $data, $this->_parser);
        }

        $this->ci->output
            ->set_output($out)
            ->_display();
        exit;
    }

    /**
     * loading view
     *
     * @param string $view
     * @param array $data
     * @param bool $parser
     * @return string
     */
    public function load_view($view, $data = array(), $parser = false)
    {
        $this->view_exists($view);

        if ($parser || $this->_parser)
        {
            if (!class_exists('CI_Parser'))
                $this->ci->load->library('parser');

            return $this->ci->parser->parse($view, $data, TRUE);
        }
        else
            return $this->ci->load->view($view, $data, TRUE);
    }

    /**
     * Check if view exists
     *
     * @access private
     * @param string $view
     */
    private function view_exists($view)
    {
        if (!file_exists(VIEWPATH . $view . '.php')) {
            show_error("Error: view {$view}.php not found!");

            exit;
        }
    }

    /**
     * loading parser
     */
    private function loading_parser()
    {
        if ($this->_parser && !class_exists('CI_Parser'))
            $this->ci->load->library('parser');
    }
}