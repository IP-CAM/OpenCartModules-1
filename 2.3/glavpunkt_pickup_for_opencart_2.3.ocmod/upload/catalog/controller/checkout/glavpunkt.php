<?php
class ControllerCheckoutGlavpunkt extends Controller {
  public function index() {

  }

  public function setprice() {
      $this->language->load('shipping/glavpunkt');
      $this->session->data['shipping_methods']['glavpunkt']['quote']['glavpunkt']['title'] = $this->request->post['type'] . ' <br>' . $this->request->post['city_to'] . ' <br>' . $this->request->post['info'] . ' <br>' . $this->request->post['phone'] . ' <br>' .$this->request->post['price'].' р.'.' <br>' . $this->request->post['address']. ' <br>' . $this->request->post['work_time']. ' <br>';
      $this->session->data['reloaded'] = true;
      $this->session->data['shipping_methods']['glavpunkt']['quote']['glavpunkt']['cost'] = $this->request->post['price'];
      $this->session->data['shipping_methods']['glavpunkt']['quote']['glavpunkt']['text'] = $this->request->post['price'];


var_dump($this->session->data['reloaded']);
var_dump($this->session->data['shipping_methods']['glavpunkt']['quote']['glavpunkt']['cost']);

exit;
  }
}
