<?php

namespace MyApp\EspritBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ArticleType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
        ->add('texte')
        ->add('image')
        ->add('nom')
        ->add('date')
                
                
                  
        ->add('role', 'entity', 
                array(
          'class' => 'MyApp\EspritBundle\Entity\Role',   
          'property' => 'permission',
          'expanded' =>false,
          'multiple' => false,
          'required' => true ) )    
                
                
                
        ->add('sousrubrique', 'entity', 
                array(
          'class' => 'MyApp\EspritBundle\Entity\Sousrubrique',   
          'property' => 'title',
          'expanded' => false,
          'multiple' => false,
          'required' => false ) )   
                
                
                
        ->add('rubrique', 'entity', 
                array(
          'class' => 'MyApp\EspritBundle\Entity\Rubrique',     
          'property' => 'title',
          'expanded' => false,
          'multiple' => false,
          'required' => false ) 
                
                
                
 
       );
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'MyApp\EspritBundle\Entity\Article'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'myapp_espritbundle_article';
    }

}
