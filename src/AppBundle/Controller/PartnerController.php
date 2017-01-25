<?php
namespace AppBundle\Controller;

use AppBundle\Form\PartnerType;
use AppBundle\Entity\Partner;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class PartnerController extends Controller{
    
    /**
    *@Route("/registerPartner", name="partner_registration")
    */
    public function registerAction(Request $request){
        $partner = new Partner();
        $form = $this->createForm(PartnerType::class, $partner);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($partner);
            $em->flush();

            return $this->redirectToRoute('homepage');
        }

        return $this->render(
            'registration/partnerRegister.html.twig',
            array('form' => $form->createView())
        );
    }

    /**
    *@Route("/partner/{page}/update", name="partner_update", requirements={"page": "\d+"})
    */
    public function updatePartner(Request $request, $page){
        $em = $this->getDoctrine()->getManager();
        $partner = $em->getRepository('AppBundle:Partner')->find($page);

            $form = $this->createForm(PartnerType::class, $partner);
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()){
                $em = $this->getDoctrine()->getManager();
                $em->persist($partner);
                $em->flush();

                return $this->redirectToRoute('homepage');
            }
        if(!$partner){
            throw $this->createNotFoundException(
                'Sócio não encontrado pelo Id: '.$page
            );
        }
        return $this->render(
            'registration/partnerRegister.html.twig',
            array('form' => $form->createView(),
            'partner' => $partner)
        );
    }

    /**
    *@Route("/partner/{page}/delete", name="partner_delete", requirements={"page": "\d+"})
    */
    public function deletepartner(Request $request, $page){
        $em = $this->getDoctrine()->getManager();
        $partner = $em->getRepository('AppBundle:Partner')->find($page);

        if(!$partner){
            throw $this->createNotFoundException(
                'Sócio não encontrado pelo Id: '.$page
            );
        }
        
        $em->remove($partner);
        $em->flush();
        return $this->redirectToRoute('homepage');
    }

    /**
    *@Route("/partner/", name="partner_show")
    */
    public function showPartner(Request $request){
        $em = $this->getDoctrine()->getManager();
        $partnerCPF = $request->request->get('_partnerCPF');
        $partner = $em->getRepository('AppBundle:Partner')->findOneByCpf($partnerCPF);

        if (!$partner){
            $errorPartner = "Sócio não encontrado pelo Id: " . $partnerCPF;
            return $this->redirectToRoute('homepage', array(
            'errorPartner' => $errorPartner,
            ));
        }

        return $this->render('show/partnerShow.html.twig', array(
            'partner' => $partner,
        ));
    }
}

?>