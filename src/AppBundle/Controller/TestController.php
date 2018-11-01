<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\HttpFoundation\Request;

class TestController extends Controller
{
    /**
     * @Route("/index")
     */
    public function indexAction()
    {
        // $arrData = ['output' => 'here the result which will appear in div'];
        // return new JsonResponse($arrData);

        return $this->render('AppBundle:Test:index.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/municipios")
     */
    public function municipiosAction(Request $request)
    {
        // Busqueda en DB
        $municipios = [
            [
                "departamento_id" => "05",
                "id" => "001",
                "nombre" => "MEDELLIN",
            ],
            [
                "departamento_id" => "05",
                "id" => "002",
                "nombre" => "ABEJORRAL",
            ],
            [
                "departamento_id" => "05",
                "id" => "004",
                "nombre" => "ABRIAQUI",
            ],
            [
                "departamento_id" => "05",
                "id" => "021",
                "nombre" => "ALEJANDRIA",
            ],
            [
                "departamento_id" => "05",
                "id" => "030",
                "nombre" => "AMAGA",
            ],
            [
                "departamento_id" => "05",
                "id" => "031",
                "nombre" => "AMALFI",
            ],
            [
                "departamento_id" => "05",
                "id" => "034",
                "nombre" => "ANDES",
            ],
            [
                "departamento_id" => "05",
                "id" => "036",
                "nombre" => "ANGELOPOLIS",
            ],
            [
                "departamento_id" => "05",
                "id" => "038",
                "nombre" => "ANGOSTURA",
            ],

            [
                "departamento_id" => "15",
                "id" => "090",
                "nombre" => "BERBEO",
            ],
            [
                "departamento_id" => "15",
                "id" => "092",
                "nombre" => "BETEITIVA",
            ],
            [
                "departamento_id" => "15",
                "id" => "097",
                "nombre" => "BOAVITA",
            ],
            [
                "departamento_id" => "15",
                "id" => "104",
                "nombre" => "BOYACA",
            ],
            [
                "departamento_id" => "15",
                "id" => "106",
                "nombre" => "BRICEÑO",
            ],
            [
                "departamento_id" => "15",
                "id" => "109",
                "nombre" => "BUENAVISTA",
            ],
            [
                "departamento_id" => "15",
                "id" => "114",
                "nombre" => "BUSBANZA",
            ],
            [
                "departamento_id" => "15",
                "id" => "131",
                "nombre" => "CALDAS",
            ],
            [
                "departamento_id" => "15",
                "id" => "135",
                "nombre" => "CAMPOHERMOSO",
            ],
            [
                "departamento_id" => "15",
                "id" => "162",
                "nombre" => "CERINZA",
            ],
            [
                "departamento_id" => "25",
                "id" => "040",
                "nombre" => "ANOLAIMA",
            ],
            [
                "departamento_id" => "25",
                "id" => "053",
                "nombre" => "ARBELAEZ",
            ],
            [
                "departamento_id" => "25",
                "id" => "086",
                "nombre" => "BELTRAN",
            ],
            [
                "departamento_id" => "25",
                "id" => "095",
                "nombre" => "BITUIMA",
            ],
            [
                "departamento_id" => "25",
                "id" => "099",
                "nombre" => "BOJACA",
            ],
            [
                "departamento_id" => "25",
                "id" => "120",
                "nombre" => "CABRERA",
            ],
            [
                "departamento_id" => "25",
                "id" => "123",
                "nombre" => "CACHIPAY",
            ],
            [
                "departamento_id" => "25",
                "id" => "126",
                "nombre" => "CAJICA",
            ],
            [
                "departamento_id" => "25",
                "id" => "148",
                "nombre" => "CAPARRAPI",
            ],
            [
                "departamento_id" => "25",
                "id" => "151",
                "nombre" => "CAQUEZA",
            ],
            [
                "departamento_id" => "25",
                "id" => "154",
                "nombre" => "CARMEN DE CARUPA",
            ],
            [
                "departamento_id" => "25",
                "id" => "168",
                "nombre" => "CHAGUANI",
            ],
            [
                "departamento_id" => "25",
                "id" => "175",
                "nombre" => "CHIA",
            ],
            [
                "departamento_id" => "25",
                "id" => "178",
                "nombre" => "CHIPAQUE",
            ],
            [
                "departamento_id" => "25",
                "id" => "181",
                "nombre" => "CHOACHI",
            ],

            [
                "departamento_id" => "27",
                "id" => "450",
                "nombre" => "MEDIO SAN JUAN",
            ],
            [
                "departamento_id" => "27",
                "id" => "491",
                "nombre" => "NOVITA",
            ],
            [
                "departamento_id" => "27",
                "id" => "495",
                "nombre" => "NUQUI",
            ],
            [
                "departamento_id" => "27",
                "id" => "580",
                "nombre" => "RIO IRO",
            ],
            [
                "departamento_id" => "27",
                "id" => "600",
                "nombre" => "RIO QUITO",
            ],
            [
                "departamento_id" => "27",
                "id" => "615",
                "nombre" => "RIOSUCIO",
            ],
            [
                "departamento_id" => "27",
                "id" => "660",
                "nombre" => "SAN JOSE DEL PALMAR",
            ],
            [
                "departamento_id" => "27",
                "id" => "745",
                "nombre" => "SIPI",
            ],
            [
                "departamento_id" => "27",
                "id" => "787",
                "nombre" => "TADO",
            ],
            [
                "departamento_id" => "27",
                "id" => "800",
                "nombre" => "UNGUIA",
            ],
            [
                "departamento_id" => "27",
                "id" => "810",
                "nombre" => "UNION PANAMERICANA",
            ]
        ];

        $departamento_id = $request->query->get('departamento_id');

        $collect = new ArrayCollection($municipios);

        $filtered = $collect->filter(function ($municipio) use ($departamento_id) {
            return $municipio['departamento_id'] === $departamento_id;
        });

        return new JsonResponse([ 'items' => array_values($filtered->toArray())]);
    }

    /**
     * @Route("/departamentos")
     */
    public function departamentosAction()
    {
        // Busqueda en DB

        $departamentos = [
            [
                "id" => "05",
                "nombre" => "ANTIOQUIA",
            ],
            [
                "id" => "15",
                "nombre" => "BOYACA",
            ],
            [
                "id" => "25",
                "nombre" => "CUNDINAMARCA",
            ],
            [
                "id" => "27",
                "nombre" => "CHOCO",
            ],
        ];

        return new JsonResponse([ 'items' => $departamentos]);
    }
}
