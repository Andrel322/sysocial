<?php
namespace AppBundle\Form;

use AppBundle\Entity\Company;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;

class CompanyType extends AbstractType{

    public function buildForm(FormBuilderInterface $builder, array $options){
        $builder
            ->add('name', TextType::class,  array('label' => 'Nome:'))
            ->add('cnpj', TextType::class, array('label' => 'CNPJ:'))
            ->add('email', EmailType::class,  array('label' => 'Email:'))
            ->add('date', BirthdayType::class,  array('label' => 'Data de criação:', 'format' => 'dd-MM-yyyy'))
            ;
    }

    public function configureOptions(OptionsResolver $resolver){
        $resolver->setDefaults(array(
            'data_class' => Company::class,
        ));
    }
}
?>