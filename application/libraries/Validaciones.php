<?php
/*
* Esta Clase guarda todas las validaciones
* Ej:
* $this->form_validation->set_rules($this->validaciones->PlansAdd());
*/
class Validaciones{


  public function PlansAdd(){

		$rules = array(
		    array( 'field' => 'plan_description', 'label' => lang('plan_desc'), 'rules' => 'required' ),
        array( 'field' => 'plan_name', 'label' => lang('plan_name'), 'rules' => 'required' ),
        array( 'field' => 'plan_cost', 'label' => lang('plan_cost'), 'rules' => 'required|numeric' ),
        array( 'field' => 'plan_credits', 'label' => lang('plan_credits'), 'rules' => 'callback_username_check|numeric|greater_than[10]|less_than[31]' ),
        array( 'field' => 'plan_is_plan', 'label' => lang('plan_is_plan'), 'rules' => 'required' ),

		);
		return $rules;
	}

  public function Discounts(){

    $rules = array(
        array( 'field' => 'discount_name', 'label' => lang('discount_name'), 'rules' => 'required' ),
        array( 'field' => 'discount_date', 'label' => lang('discount_date'), 'rules' => 'required' ),
        array( 'field' => 'discount_amount', 'label' => lang('discount_amount'), 'rules' => 'required|numeric' ),


    );
    return $rules;
  }

  public function Products(){

    $rules = array(
        array( 'field' => 'product_name', 'label' => 'Nombre del Producto', 'rules' => 'required' ),
        array( 'field' => 'product_stock', 'label' => 'Stock', 'rules' => 'required|is_natural_no_zero' ),
        array( 'field' => 'product_cost_sale', 'label' => 'Costo de Venta', 'rules' => 'required|greater_than[0]' ),
        array( 'field' => 'product_cost', 'label' => 'Costo de Compra', 'rules' => 'required|greater_than[0]' ),


    );
    return $rules;
  }



}
