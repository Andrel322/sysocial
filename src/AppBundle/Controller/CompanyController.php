<?php
namespace AppBundle\Controller;

use AppBundle\Form\CompanyType;
use AppBundle\Entity\Company;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class CompanyController extends Controller{
    
    /**
    *@Route("/registerCompany", name="company_registration")
    */
    public function registerAction(Request $request){
        $company = new Company();
        $form = $this->createForm(CompanyType::class, $company);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($company);
            $em->flush();

            return $this->redirectToRoute('homepage');
        }

        return $this->render(
            'registration/companyRegister.html.twig',
            array('form' => $form->createView())
        );
    }

    /**
    *@Route("/company/{page}/update", name="company_update", requirements={"page": "\d+"})
    */
    public function updateCompany(Request $request, $page){
        $em = $this->getDoctrine()->getManager();
        $company = $em->getRepository('AppBundle:Company')->find($page);
        $form = $this->createForm(CompanyType::class, $company);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($company);
            $em->flush();

            return $this->redirectToRoute('homepage');
            }

        if(!$company){
            throw $this->createNotFoundException(
                'Empresa não encontrada pelo Id: '.$page
            );
        }

        return $this->render(
            'registration/companyRegister.html.twig',
            array('form' => $form->createView(),
            'company' => $company)
        );
    }

    /**
    *@Route("/company/{page}/delete", name="company_delete", requirements={"page": "\d+"})
    */
    public function deleteCompany(Request $request, $page){
        $em = $this->getDoctrine()->getManager();
        $company = $em->getRepository('AppBundle:Company')->find($page);

        if(!$company){
            throw $this->createNotFoundException(
                'Empresa não encontrada pelo Id: '.$page
            );
        }

        $em->remove($company);
        $em->flush();
        return $this->redirectToRoute('homepage');
    }

    /**
    *@Route("/company/", name="company_show")
    */
    public function showCompany(Request $request){
        $em = $this->getDoctrine()->getManager();
        $companyCNPJ = $request->request->get('_companyCNPJ');
        $company = $em->getRepository('AppBundle:Company')->findOneByCnpj($companyCNPJ);

        if (!$company){
            $errorCompany = "A empresa não existe pelo CNPJ: " . $companyCNPJ;
            return $this->redirectToRoute('homepage', array(
            'errorCompany' => $errorCompany,
            ));
        }

        return $this->render('show/companyShow.html.twig', array(
            'company' => $company,
        ));
    }
}

?>