<?php

class animalreportController extends Controller
{   
    public function render()
    {   
        if(empty($_POST)){
            # Quando não há POST para gerar o relatório
            $_SESSION['msg'] = 'report_sem_post';
            header("Location: ".BASE_URL."animalreport");
        }
        new ReportAnimal();
    }
    
    public function index()
    {
        $breadcrumb = [
			'Início' => '',
			'Relatório' => 'false',
			'Animal' => 'false'
        ];

        $proprietarios = new Proprietario();

        $dados['proprietarios'] = $proprietarios->getAllResumido();
        $this->setBreadCrumb($breadcrumb);
        $this->loadTemplate('reportFormAnimal', $dados);
    }
}