<?php

class fungsi {
    protected $ci;

    public function count_menu(){
        $this->ci->load->model('menu');
        return $this->ci->menu->get()->num_rows();
    }
    public function count_order(){
        $this->ci->load->model('order');   
        return $this->ci->order->get()->num_rows();
    }
    public function count_customer(){
        $this->ci->load->model('customer');
        return $this->ci->customer->get()->num_rows();
    }
}
?>