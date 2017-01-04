<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Examples extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');

		$this->load->library('grocery_CRUD');
	}

	public function _example_output($output = null)
	{
		$this->load->view('example.php',$output);
	}

	public function offices()
	{
		$output = $this->grocery_crud->render();

		$this->_example_output($output);
	}

	public function index()
	{
		$this->_example_output((object)array('output' => '' , 'js_files' => array() , 'css_files' => array()));
	}

	public function producto()
	{
		try{
			$crud = new grocery_CRUD();

			$crud->set_theme('bootstrap');
			$crud->set_table('productos');
			$crud->set_subject('productos');
			$crud->set_relation('id_cate','categorias','nombreCategoria');
            $crud->set_field_upload('imagen','assets/uploads/files');
            $crud->field_type('stock','dropdown',array( "1"  => "SI", "0" => "NO"));
            $crud->field_type('novedad','dropdown',array( "1"  => "SI", "0" => "NO"));
            
			$output = $crud->render();
            $this->_example_output($output);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}
    
    public function slider()
	{
		try{
			$crud = new grocery_CRUD();

			$crud->set_theme('bootstrap');
			$crud->set_table('slider');
			$crud->set_subject('slider');
            $crud->set_field_upload('imagen','assets/uploads/slider');
            
			$output = $crud->render();
            $this->_example_output($output);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}
    
    public function config()
	{
		try{
			$crud = new grocery_CRUD();

			$crud->set_theme('bootstrap');
			$crud->set_table('config');
			$crud->set_subject('Configuracion');
$crud->required_fields('telefono','email','direccion','empresa','servicios','fraseInicioC','fraseInicioB');
			$crud->columns('telefono','email','direccion','empresa','servicios','fraseInicioC','fraseInicioB');
            
			$output = $crud->render();
            $this->_example_output($output);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}

    
    public function clientes()
	{
		try{
			$crud = new grocery_CRUD();

			$crud->set_theme('bootstrap');
			$crud->set_table('clientes');
			$crud->set_subject('Clientes');
			$output = $crud->render();
            $this->_example_output($output);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}
    
    public function categorias()
	{
		try{
			$crud = new grocery_CRUD();

			$crud->set_theme('bootstrap');
			$crud->set_table('categorias');
			$crud->set_subject('Categorias');
			$crud->required_fields('nombreCategoria');
			$crud->columns('id_padre','nombreCategoria');
            $crud->fields('id_padre','nombreCategoria');
            $crud->set_relation('id_padre','categorias','nombreCategoria');
			$output = $crud->render();
            $this->_example_output($output);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}
    
    public function ventas()
	{
		try{
			$crud = new grocery_CRUD();

			$crud->set_theme('bootstrap');
			$crud->set_table('ventas');
			$crud->set_subject('Ventas');
            $crud->set_relation('id_estado','estadoVentas','nombreEstado');
            $crud->set_relation('id_cli','clientes','nomyap');
			$crud->add_action('Detalle', '', 'Examples/ventasdetalle','ui-icon-plus');
            $crud->unset_add();
			$output = $crud->render();
            $this->_example_output($output);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}
    
    public function ventasdetalle($primary_key)
	{
		try{
			$crud = new grocery_CRUD();

			$crud->set_theme('bootstrap');
			$crud->set_table('ventas_items');
            $crud->where('id_venta =', $primary_key);
			$crud->set_subject('Detalles de Venta');
			$crud->columns('id_pro','cantidad','precioUnitario','precioTotal');
            $crud->set_relation('id_pro','productos','nombreProducto');
            $crud->display_as('id_pro','Producto');
            $crud->unset_add();
            $crud->unset_edit();
            $crud->unset_delete();
            $output = $crud->render();
            $this->_example_output($output);
            

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}
}