<?php

namespace webStudent\EtudiantBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use webStudent\EtudiantBundle\Form\EtudiantType;

class EtudiantModifType extends EtudiantType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
       // On fait appel à la méthode buildForm du parent, qui va ajouter tous les champs à $builder
		parent::buildForm($builder, $options);
		//$etudiant = $options['data'];

		// On supprime celui qu'on ne veut pas dans le formulaire de modification
		 $builder->add('nom', 'text', array(
											'label'  => 'NOM ETUDIANT : ',
											'read_only' => true));
		$builder->remove('section');
		$builder->remove('niveau');
		$builder->remove('promo');
		$builder->remove('statut');
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
        return 'webstudent_etudiantbundle_etudiantModif';
    }
}
