<?php
namespace AppBundle\Form;

use AppBundle\Entity\Partner;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;

class PartnerType extends AbstractType{

    public function buildForm(FormBuilderInterface $builder, array $options){
        $builder
            ->add('name', TextType::class,  array('label' => 'Nome Completo:'))
            ->add('cpf', TextType::class, array('label' => 'CPF:'))
            ->add('email', EmailType::class,  array('label' => 'Email:'))
            ->add('date', BirthdayType::class,  array('label' => 'Data de nascimento:', 'format' => 'dd-MM-yyyy'))
            ;
    }

    public function configureOptions(OptionsResolver $resolver){
        $resolver->setDefaults(array(
            'data_class' => Partner::class,
        ));
    }
}
?>