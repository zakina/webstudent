<?php

namespace webStudent\EtudiantBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EtudiantType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', 'text', array('label'  => 'NOM ETUDIANT : '))
            ->add('prenom', 'text')
            //->add('dateNaissance', 'date')
			->add('dateNaissance', 'date', array(
											'input'  => 'datetime',
											'widget' => 'single_text',
											'format' => 'dd/MM/yyyy'))
            ->add('adrMail', 'email')
            ->add('telephone', 'text')
            ->add('login', 'text')
            ->add('mdp', 'text')
            ->add('statut', 'integer')
            ->add('dateEntree', 'date')

			->add('section', 'entity', array(
										'class'    => 'webStudentEtudiantBundle:Section',
										'property' => 'nom',
										'multiple' => false))
			->add('niveau', 'entity', array(
										'class'    => 'webStudentEtudiantBundle:Niveau',
										'property' => 'libelle',
										'multiple' => false,
										'expanded' => true))
			->add('promo', 'entity', array(
										'class'    => 'webStudentEtudiantBundle:Promo',
										'property' => 'annee',
										'multiple' => false))
			
			
			
			
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'webStudent\EtudiantBundle\Entity\Etudiant'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'webstudent_etudiantbundle_etudiant';
    }
}
