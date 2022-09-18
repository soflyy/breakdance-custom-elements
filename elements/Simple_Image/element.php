<?php

namespace EssentialElements;

use function Breakdance\Elements\c;
use function Breakdance\Elements\PresetSections\getPresetSection;


\Breakdance\ElementStudio\registerElementForEditing(
    "EssentialElements\\SimpleImage",
    \Breakdance\Util\getdirectoryPathRelativeToPluginFolder(__DIR__)
);

class SimpleImage extends \Breakdance\Elements\Element
{
    static function uiIcon()
    {
        return 'ImageIcon';
    }

    static function tag()
    {
        return 'div';
    }

    static function tagOptions()
    {
        return [];
    }

    static function tagControlPath()
    {
        return false;
    }

    static function name()
    {
        return 'Simple Image';
    }

    static function className()
    {
        return 'oxd-simple-image';
    }

    static function category()
    {
        return 'basic';
    }

    static function badge()
    {
        return false;
    }

    static function slug()
    {
        return get_class();
    }

    static function template()
    {
        return file_get_contents(__DIR__ . '/html.twig');
    }

    static function defaultCss()
    {
        return file_get_contents(__DIR__ . '/default.css');
    }

    static function defaultProperties()
    {
        return false;
    }

    static function defaultChildren()
    {
        return false;
    }

    static function cssTemplate()
    {
        $template = file_get_contents(__DIR__ . '/css.twig');
        return $template;
    }

    static function designControls()
    {
        return [c(
        "image",
        "Image",
        [c(
        "width",
        "Width",
        [],
        ['type' => 'unit'],
        true,
        false,
        [],
      ), c(
        "max_width",
        "Max Width",
        [],
        ['type' => 'unit'],
        true,
        false,
        [],
      ), c(
        "height",
        "Height",
        [],
        ['type' => 'unit'],
        true,
        false,
        [],
      ), c(
        "object_fit",
        "Object Fit",
        [],
        ['type' => 'dropdown', 'layout' => 'inline', 'items' => ['0' => ['text' => 'Cover', 'value' => 'cover'], '1' => ['value' => 'contain', 'text' => 'Contain'], '2' => ['text' => 'Fill', 'value' => 'fill']], 'condition' => ['path' => 'design.image.height', 'operand' => 'is set', 'value' => '']],
        false,
        false,
        [],
      ), c(
        "zoom",
        "Zoom",
        [],
        ['type' => 'unit', 'layout' => 'vertical', 'unitOptions' => ['defaultType' => '%', 'types' => ['0' => '%']], 'rangeOptions' => ['min' => 0, 'max' => 100, 'step' => 1]],
        false,
        true,
        [],
      ), c(
        "focus_point",
        "Focus Point",
        [],
        ['type' => 'focus_point', 'layout' => 'vertical', 'focusPointOptions' => ['imagePropertyPath' => 'content.content.image'], 'condition' => ['path' => 'design.image.zoom', 'operand' => 'is set', 'value' => '']],
        false,
        true,
        [],
      )],
        ['type' => 'section', 'sectionOptions' => ['type' => 'accordion']],
        false,
        false,
        [],
      ), c(
        "effects",
        "Effects",
        [c(
        "opacity",
        "Opacity",
        [],
        ['type' => 'number', 'layout' => 'inline', 'rangeOptions' => ['min' => 0, 'max' => 1, 'step' => 0.05]],
        false,
        true,
        [],
      ), getPresetSection(
      "EssentialElements\\filter",
      "Filters",
      "filters",
       ['type' => 'popout']
     ), c(
        "transition_duration",
        "Transition Duration",
        [],
        ['type' => 'unit', 'layout' => 'inline', 'unitOptions' => ['types' => ['0' => 'ms'], 'defaultType' => 'ms'], 'rangeOptions' => ['min' => 0, 'max' => 6000, 'step' => 50]],
        false,
        false,
        [],
      ), c(
        "mask",
        "Mask",
        [c(
        "shape",
        "Shape",
        [],
        ['type' => 'dropdown', 'layout' => 'inline', 'items' => ['0' => ['text' => 'Donut', 'label' => 'Label', 'value' => 'donut'], '1' => ['text' => 'Tv', 'value' => 'tv'], '2' => ['text' => 'Waves', 'value' => 'waves'], '3' => ['text' => 'Waves 2', 'value' => 'waves2'], '4' => ['text' => 'Blob', 'value' => 'blob'], '5' => ['text' => 'Star 1', 'value' => 'star1'], '6' => ['text' => 'Star 2', 'value' => 'star2'], '7' => ['text' => 'Star 3', 'value' => 'star3'], '8' => ['text' => 'Star 4', 'value' => 'star4'], '9' => ['text' => 'Stripes', 'value' => 'stripes'], '10' => ['text' => 'Pill', 'value' => 'pill'], '11' => ['text' => 'Custom', 'value' => 'custom']]],
        false,
        false,
        [],
      ), c(
        "custom_shape",
        "Custom Shape",
        [],
        ['type' => 'wpmedia', 'layout' => 'vertical', 'condition' => ['path' => 'design.effects.mask.shape', 'operand' => 'equals', 'value' => 'custom']],
        false,
        false,
        [],
      ), c(
        "size",
        "Size",
        [],
        ['type' => 'dropdown', 'layout' => 'inline', 'items' => ['0' => ['text' => 'Contain', 'value' => 'contain'], '1' => ['value' => 'cover', 'text' => 'Cover'], '2' => ['text' => 'Custom', 'value' => 'custom']]],
        false,
        false,
        [],
      ), c(
        "custom_size",
        "Custom Size",
        [],
        ['type' => 'unit', 'layout' => 'inline', 'condition' => ['path' => 'design.effects.mask.size', 'operand' => 'equals', 'value' => 'custom'], 'unitOptions' => ['types' => ['0' => 'px', '1' => '%'], 'defaultType' => '%']],
        false,
        false,
        [],
      ), c(
        "position",
        "Position",
        [],
        ['type' => 'focus_point', 'layout' => 'vertical'],
        false,
        false,
        [],
      ), c(
        "repeat",
        "Repeat",
        [],
        ['type' => 'dropdown', 'layout' => 'inline', 'items' => ['0' => ['value' => 'no-repeat', 'text' => 'no-repeat'], '1' => ['text' => 'repeat', 'value' => 'repeat'], '2' => ['text' => 'repeat-x', 'value' => 'repeat-x'], '3' => ['text' => 'repeat-y', 'value' => 'repeat-y'], '4' => ['text' => 'space', 'value' => 'space'], '5' => ['text' => 'round', 'value' => 'round']]],
        false,
        false,
        [],
      )],
        ['type' => 'section', 'sectionOptions' => ['type' => 'popout']],
        false,
        false,
        [],
      )],
        ['type' => 'section'],
        false,
        false,
        [],
      ), getPresetSection(
      "EssentialElements\\borders",
      "Borders",
      "borders",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\spacing_margin_y",
      "Spacing",
      "spacing",
       ['type' => 'popout']
     ), c(
        "caption",
        "Caption",
        [c(
        "position",
        "Position",
        [],
        ['type' => 'button_bar', 'layout' => 'inline', 'items' => ['0' => ['text' => 'Overlap', 'value' => 'overlap'], '1' => ['text' => 'Below', 'value' => 'below']]],
        false,
        false,
        [],
      ), c(
        "background",
        "Background",
        [],
        ['type' => 'color', 'layout' => 'inline'],
        false,
        false,
        [],
      ), getPresetSection(
      "EssentialElements\\typography_with_align",
      "Typography",
      "typography",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\borders",
      "Borders",
      "borders",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\spacing_padding_all",
      "Spacing",
      "spacing",
       ['type' => 'popout']
     )],
        ['type' => 'section', 'sectionOptions' => ['type' => 'accordion']],
        false,
        false,
        [],
      ), getPresetSection(
      "EssentialElements\\lightbox_single_design",
      "Lightbox",
      "lightbox",
       ['type' => 'popout']
     )];
    }

    static function contentControls()
    {
        return [c(
        "content",
        "Content",
        [c(
        "image",
        "Image",
        [],
        ['type' => 'wpmedia', 'layout' => 'vertical', 'mediaOptions' => ['acceptedFileTypes' => ['0' => 'image'], 'multiple' => false]],
        false,
        false,
        [],
      ), c(
        "size",
        "Image Size",
        [],
        ['type' => 'media_size_dropdown', 'layout' => 'vertical', 'mediaSizeOptions' => ['imagePropertyPath' => 'content.content.image', 'disableSrcset' => false]],
        false,
        false,
        [],
      ), c(
        "alt",
        "Alt",
        [c(
        "alt",
        "Alt",
        [],
        ['type' => 'button_bar', 'layout' => 'vertical', 'items' => ['0' => ['value' => 'disable', 'text' => 'Disable'], '1' => ['text' => 'Custom', 'value' => 'custom']]],
        false,
        false,
        [],
      ), c(
        "custom_alt",
        "Custom Alt",
        [],
        ['type' => 'text', 'layout' => 'vertical', 'condition' => ['path' => 'content.content.alt.alt', 'operand' => 'equals', 'value' => 'custom']],
        false,
        false,
        [],
      )],
        ['type' => 'section', 'layout' => 'vertical', 'sectionOptions' => ['type' => 'popout']],
        false,
        false,
        [],
      ), c(
        "lazy_load",
        "Lazy Load",
        [],
        ['type' => 'toggle', 'layout' => 'inline'],
        false,
        false,
        [],
      )],
        ['type' => 'section', 'layout' => 'vertical'],
        false,
        false,
        [],
      )];
    }

    static function settingsControls()
    {
        return [];
    }

    static function dependencies()
    {
        return ['0' =>  ['scripts' => ['%%BREAKDANCE_ELEMENTS_PLUGIN_URL%%dependencies-files/lightgallery@2/lightgallery-bundle.min.js','%%BREAKDANCE_ELEMENTS_PLUGIN_URL%%dependencies-files/elements-reusable-code/lightbox.js'],'inlineScripts' => ['new BreakdanceLightbox(\'%%SELECTOR%%\', {
  itemSelector: \'.breakdance-image-link\',
  ...{{ design.lightbox|json_encode }}
});'],'styles' => ['%%BREAKDANCE_ELEMENTS_PLUGIN_URL%%dependencies-files/lightgallery@2/css/lightgallery-bundle.min.css'],'builderCondition' => 'return false;','frontendCondition' => '{% if content.content.link.link_type == \'lightbox\' %}return true;{% endif %}','title' => 'Lightbox',],];
    }

    static function settings()
    {
        return false;
    }

    static function addPanelRules()
    {
        return ['alwaysHide' => false];
    }

    static public function actions()
    {
        return false;
    }

    static function nestingRule()
    {
        return ["type" => "final",   ];
    }

    static function spacingBars()
    {
        return ['0' => ['location' => 'outside-bottom', 'cssProperty' => 'margin-bottom', 'affectedPropertyPath' => 'design.spacing.margin_bottom.%%BREAKPOINT%%'], '1' => ['location' => 'outside-top', 'cssProperty' => 'margin-top', 'affectedPropertyPath' => 'design.spacing.margin_top.%%BREAKPOINT%%']];
    }

    static function attributes()
    {
        return false;
    }

    static function experimental()
    {
        return false;
    }

    static function order()
    {
        return 90;
    }

    static function dynamicPropertyPaths()
    {
        return ['0' => ['path' => 'content.content.image', 'accepts' => 'image_url'], '1' => ['accepts' => 'string', 'path' => 'content.content.alt.custom_alt'], '2' => ['accepts' => 'string', 'path' => 'content.content.caption.caption'], '3' => ['accepts' => 'url', 'path' => 'content.content.link.url']];
    }

    static function additionalClasses()
    {
        return false;
    }

    static function projectManagement()
    {
        return false;
    }

    static function propertyPathsToWhitelistInFlatProps()
    {
        return ['design.image.object_fit'];
    }

    static function propertyPathsToSsrElementWhenValueChanges()
    {
        return false;
    }
}
