<?php

namespace Sinoeujobs\JobinBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class JobType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('jobTitle')
            ->add('jobSlug')
            ->add('jobCompanyName')
            ->add('jobCompanyLogo')
            ->add('jobCompanyWebsite')
            ->add('jobDescription')
            ->add('jobApply')
            ->add('jobCreatedAt')
            ->add('jobUpdatedAt')
            ->add('jobExpiresAt')
            ->add('jobIsApproved')
            ->add('jobIsActive')
            ->add('jobIsFilled')
            ->add('jobTypeId')
            ->add('jobCategoryId')
            ->add('ownerId')
            ->add('addressId')
            ->add('address')
            ->add('jobCategory')
            ->add('jobType')
            ->add('owner')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Sinoeujobs\JobinBundle\Entity\Job'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'sinoeujobs_jobinbundle_job';
    }
}
