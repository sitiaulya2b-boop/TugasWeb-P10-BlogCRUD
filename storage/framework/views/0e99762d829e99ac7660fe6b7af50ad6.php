<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['title' => '']));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter((['title' => '']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<div class="card shadow-sm mb-4">
    <?php if($title): ?>
        <div class="card-header bg-white fw-bold">
            <?php echo e($title); ?>

        </div>
    <?php endif; ?>
    <div class="card-body">
        <?php echo e($slot); ?>

    </div>
</div><?php /**PATH C:\aul-tkul\PEMROGRAMAN-WEB\TugasWeb-P10-BlogCRUD\resources\views/components/card.blade.php ENDPATH**/ ?>