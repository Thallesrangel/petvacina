<?php

require 'vendor/autoload.php';

class ReportParasita extends FPDF
{  
    function header(){
        $this->SetTitle(NOME_APP . " | Report Parasitas");
        $this->Image(BASE_URL."assets/img/logoLow.png",10,6);
        $this->SetFont('Arial','',12);
        $this->Cell(276,5, utf8_decode("Relatório | Parasitas"),0,0,'C');
        $this->Ln();
        $this->setFont('Arial','',10);
        $this->Cell(276,10, utf8_decode('Quem cuida, vacina.'));
        $this->Ln(15);
    }
    function footer(){
        $this->SetY(-15);
        $this->SetFont('Arial','',8);
        $this->Cell(0,10, utf8_decode('Página ').$this->PageNo().'/{nb}',0,0,'C');
        $this->Cell(0,5,utf8_decode("Usuário: ".$_SESSION['nome_usuario']),0,0,'R');
        $this->Cell(0,15,"Emitido em: ".date("d/m/Y H:i:s"),0,0,'R');
    }

    function headerTable() { 
        $this->SetFont('Arial', 'B', 8);
        $this->Cell(30,8, utf8_decode('Produto'),1,0,'L');
        $this->Cell(15,8, 'Peso',1,0,'L');
        $this->Cell(15,8,'Dose (ml)',1,0,'L');
        $this->Cell(25,8, utf8_decode('Veterinário'),1,0,'L');
        $this->Cell(15,8,'CRMV',1,0,'L');
        $this->Cell(17,8, utf8_decode('Aplicação'),1,0,'L');
        $this->Cell(16,8, utf8_decode('Agendado'),1,0,'L');
        $this->Cell(18,8, utf8_decode('Registrado'),1,0,'L');
        $this->Ln();
    }

    function viewTable()
    { 
        $this->SetFont('Arial', '', 6);

        $proprietario = $_POST['proprietario'];

        $parasita = new Parasita();
        $dados = $parasita->listarReport($proprietario);
   
        foreach($dados as $value) {
            $this->Cell(30,7,$value['nome_produto'],1,0,'L');
            $this->Cell(15,7,$value['peso'] . " - " .$value['peso_unidade'],1,0,'L');
            $this->Cell(15,7,$value['dose'],1,0,'L');
            $this->Cell(25,7,$value['nome_veterinario'],1,0,'L');
            $this->Cell(15,7,$value['registro_crmv'] ? $value['registro_crmv'] : "N/D",1,0,'L');
            $this->Cell(17,7, $value['data_aplicacao'] ? date("d/m/Y", strtotime($value['data_aplicacao'])) : "",1,0,'L');
            $this->Cell(16,7, $value['data_prox_dose'] ? date("d/m/Y", strtotime($value['data_prox_dose'])) : "N/D",1,0,'L');
            $this->Cell(18,7, date("d/m/Y", strtotime($value['data_registro'])),1,0,'L');

            $this->Ln();
        }
    }
}

$pdf = new ReportParasita();
$pdf->AliasNbPages();
$pdf->AddPage('P','A4',0);
$pdf->headerTable();
$pdf->viewTable();
$pdf->Output();