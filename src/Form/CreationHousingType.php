<?php


namespace App\Form;



use App\DTO\CreationHousing;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\OptionsResolver\OptionsResolver;


class CreationHousingType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title',TextType::class, [
                'required' => true,
                'label' => 'body.Title',
                'attr' => [
                    'class' => 'ma-class-css'
                ]
            ])
            ->add('price',\Symfony\Component\Form\Extension\Core\Type\IntegerType::class,
                ['label' => 'body.Price'])
            ->add('content', TextareaType::class,
                ['label' => 'body.Content'])
            ->add('submit', SubmitType::class,
                ['label' => 'body.Submit'])
        ;
    }
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => CreationHousing::class
        ]);
}
}