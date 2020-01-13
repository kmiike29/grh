<?php

namespace App\Controller;

use App\Entity\CloudTypeCompte;
use App\Form\CloudTypeCompteFormType;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CloudTypeCompteController extends AbstractController
{

    /*
     * @
     * */
    /*public function __construct()
    {
        $repo = $this->getDoctrine()->getRepository(CloudTypeCompte::class);
        return $repo->findAll();
    }*/

    /*
     * Permet d'avoir la liste des types compte issus de la base !
     * @return array
     * */
    private function getListCloudTypeCompte()
    {
        $repo = $this->getDoctrine()->getRepository(CloudTypeCompte::class);
        return $repo->findAll();
    }

    /**
     * @Route( "/cloud/type/compte", name = "cloud_type_compte_new" )
     * Permet de créer un nouveau CloudTypeCompte
     * @return Response
     */
    public function ajouter(Request $request)
    {
        $listCloudTypeCompte = $this->getListCloudTypeCompte();
        $cloudTypeCompte = new CloudTypeCompte();

        $form = $this->createForm(CloudTypeCompteFormType::class, $cloudTypeCompte);
        $form->handleRequest($request);
        dump($cloudTypeCompte);
        if ($form->isSubmitted() && $form->isValid()) {
            $rand = rand(100, 1000);
            $code = "CODE$rand";
            dump($code);
            $cloudTypeCompte->setCode($code);
            $manager = $this->getDoctrine()->getManager();
            $manager->persist($cloudTypeCompte);
            $manager->flush();
            $listCloudTypeCompte = $this->getListCloudTypeCompte();
            $this->addFlash("success", "Enregistrement effectué avec succès !");
            //return new Response('Type compte ajouté...');
        }
        //$formView = $form->createView();
        return $this->render('cloud_type_compte/index.html.twig', [
            //'cloudTypeCompte' => $cloudTypeCompte,
            'form' => $form->createView(),
            'listCloudTypeCompte' => $listCloudTypeCompte,
        ]);
    }
}
