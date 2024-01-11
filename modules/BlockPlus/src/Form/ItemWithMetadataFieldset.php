<?php declare(strict_types=1);
namespace BlockPlus\Form;

use BlockPlus\Form\Element\TemplateSelect;
use Laminas\Form\Element;
use Laminas\Form\Fieldset;

class ItemWithMetadataFieldset extends Fieldset
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
            ])
            ->add([
                'name' => 'o:block[__blockIndex__][o:data][column]',
                'type' => Element\Select::class,
                'options' => [
                    'label' => 'Number of columns', // @translate
                    'info' => 'Choose the number of columns. This is only applicable to the item-with-metadata-other template. It will have not effect on Default (which is a carrousel) or volumes (which is a fixed layout)',
                    'value_options' => [
                        'one' => 'One column', // @translate
                        'col-md-5' => 'Two columns', // @translate
                        'col-md-4' => 'Three columns', // @translate
                        'col-md-3' => 'Four columns', // @translate
                    ],
                ],
            ])
            ->add([
                'name' => 'o:block[__blockIndex__][o:data][template]',
                'type' => TemplateSelect::class,
                'options' => [
                    'label' => 'Template to display', // @translate
                    'info' => 'Templates are in folder "common/block-layout" of the theme and should start with "item-with-metadata".', // @translate
                    'template' => 'common/block-layout/item-with-metadata',
                ],
                'attributes' => [
                    'class' => 'chosen-select',
                ],
            ]);
    }
}
