<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *        http://example.com/index.php/welcome
     *    - or -
     *        http://example.com/index.php/welcome/index
     *    - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Data_model');
    }

    public function index()
    {
        $data = array();
        $this->load->view('welcome_message', $data);
    }

    public function getData()
    {
        $requestData = $_REQUEST;

        //declare coloum for shoting
        $columns = array(
            0 => 'sd_student_id',
            1 => 'student_name',
            2 => 'studnet_email'
        );

        //write query for get data
        $sql = "SELECT * FROM sd_student  where 1=1";
        $query = $this->Data_model->query($sql);
        $totalData = count($query);
        $totalFiltered = $totalData;

        // define column for searching
        if (!empty($requestData['search']['value'])) {
            $sql .= " AND (  student_name LIKE '" . $requestData['search']['value'] . "%' ";
            $sql .= " OR  studnet_email LIKE '" . $requestData['search']['value'] . "%' )";
        }
        $query = $this->Data_model->query($sql);
        $totalFiltered = count($query);

        //ordering clause //by default  0th coloumn asc
        $sql .= " ORDER BY " . $columns[$requestData['order'][0]['column']] . "   " . $requestData['order'][0]['dir'] . "   LIMIT " . $requestData['start'] . " ," . $requestData['length'] . "   ";  // adding length
        $query = $this->Data_model->query($sql);


        $data = array();

        $cnt = $requestData['start'] + 1;
        foreach ($query as $dt) {
            $nestedData = array();
            $nestedData['rowId'] = $dt['sd_student_id'];
            $nestedData[] = $cnt++;
            $nestedData[] = $dt['student_name'];
            $nestedData[] = $dt['studnet_email'];
            $data[] = $nestedData;
        }

        //create json in datatable form
        $json_data = array(
            "draw" => intval($requestData['draw']),
            "recordsTotal" => intval($totalData),
            "recordsFiltered" => intval($totalFiltered),
            "data" => $data
        );

        echo json_encode($json_data);
    }
}
