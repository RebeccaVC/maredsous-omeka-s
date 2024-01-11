<?php declare(strict_types=1);

namespace BlockPlus\Form;

use BlockPlus\Form\Element as BlockPlusElement;
use Laminas\Form\Element;
use Laminas\Form\Fieldset;

class ItemShowcaseFieldset extends Fieldset
{
    public function init(): void
    {
        // Attachments fields are managed separately.

        $this
            ->add([
                'name' => 'o:block[__blockIndex__][o:data][heading]',
                'type' => Element\Text::class,
                'options' => [
                    'label' => 'Block title', // @translate
                ],
                'attributes' => [
                    'id' => 'item-showcase-heading',
                ],
            ])
            // ->add([
            //     'name' => 'o:block[__blockIndex__][o:data][thumbnail_type]',
            //     'type' => BlockPlusElement\ThumbnailTypeSelect::class,
            //     'options' => [
            //         'label' => 'Thumbnail type', // @translate
            //     ],
            //     'attributes' => [
            //         'id' => 'item-showcase-thumbnail-type',
            //         'class' => 'chosen-select',
            //     ],
            // ])
            // ->add([
            //     'name' => 'o:block[__blockIndex__][o:data][show_title_option]',
            //     'type' => BlockPlusElement\BlockShowTitleSelect::class,
            //     'attributes' => [
            //         'id' => 'item-showcase-show-title-option',
            //         'class' => 'chosen-select',
            //     ],
            // ])
            // ->add([
            //     'name' => 'o:block[__blockIndex__][o:data][template]',
            //     'type' => BlockPlusElement\TemplateSelect::class,
            //     'options' => [
            //         'label' => 'Template to display', // @translate
            //         'info' => 'Templates are in folder "common/block-layout" of the theme and should start with "item-showcase".', // @translate
            //         'template' => 'common/block-layout/item-showcase',
            //     ],
            //     'attributes' => [
            //         'id' => 'item-showcase-template',
            //         'class' => 'chosen-select',
            //     ],
            // ]);
            ->add([
                'name' => 'o:block[__blockIndex__][o:data][embed]',
                'type' => Element\Checkbox::class,
                'options' => [
                    'label' => 'Do not embed file', // @translate
                    'info' => 'If checked, the file will not be embedded into the page but instead be a link to it.',
                ],
            ])
            ->add([
                'name' => 'o:block[__blockIndex__][o:data][colour]',
                'type' => Element\Select::class,
                'options' => [
                    'label' => 'Background colour', // @translate
                    'info' => 'Choose the background colour of the viewer.',
                    'value_options' => [
                        'ede8da' => 'Taupe', // @translate
                        'white' => 'White', // @translate
                        'ad3e3f' => 'Red', // @translate
                    ],
                ],
            ]);
    }
}
