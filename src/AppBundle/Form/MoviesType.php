<?php

namespace AppBundle\Form;

use AppBundle\Form\VideosType;
use AppBundle\Form\Media;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;

class MoviesType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('movies')
                ->add('nationality')
                ->add('releaseDate')
                ->add('slider')
                ->add('gallery')
                ->add('resume')
                ->add('actors')
                ->add('author')
                ->add('media', Media::class, array(
                    'required' => false,
                ))
                ->add('videos', VideosType::class, array(
                    'required' => false,
                ))
                ->add('slider', CheckboxType::class, array(
                    'required' => false,
                ));
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Movies'
        ));
    }

//    /**
//     * {@inheritdoc}
//     */
//    public function getBlockPrefix()
//    {
//        return 'appbundle_movies';
//    }


}
