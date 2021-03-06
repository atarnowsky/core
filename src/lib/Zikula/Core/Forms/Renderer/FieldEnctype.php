<?php

namespace Zikula\Core\Forms\Renderer;

use Symfony\Component\Form\FormView;
use Zikula\Core\Forms\RendererInterface;
use Zikula\Core\Forms\FormRenderer;

/**
 *
 */
class FieldEnctype implements RendererInterface
{
    public function getName()
    {
        return 'field_enctype';
    }
    
    public function render(FormView $form, $variables, FormRenderer $renderer)
    {
        return $form->get('multipart')? 'enctype="multipart/form-data"' : '';
    }
}
