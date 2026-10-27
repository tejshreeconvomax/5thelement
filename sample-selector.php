<?php
$pages = [
    ['Home', 'index.php'],
    ['Catering', 'catering.php'],
    ['Jacksonville', 'jacksonville.php'],
    ['Location menu', 'location-menu.php'],
];
$samples = [
    ['Sample1', 'Sample 1', 'Current live design'],
    ['Sample2', 'Sample 2', 'Royal Indian Shahi'],
    ['Sample3', 'Sample 3', 'Urban Spice — Modern Indian Fusion'],
];
?>
<!doctype html><html lang="en"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1"><title>Design Samples — 5th Element</title><script src="https://cdn.tailwindcss.com"></script></head><body class="min-h-screen bg-[#fbf7f0] p-6 text-[#2a1f17] md:p-12"><main class="mx-auto max-w-6xl"><p class="text-xs font-semibold tracking-[.25em] text-[#9a6d25]">5TH ELEMENT</p><h1 class="mt-2 font-serif text-5xl">Design samples</h1><div class="mt-10 grid gap-6"><?php foreach ($samples as [$folder, $name, $note]): ?><section class="rounded-2xl bg-white p-6 shadow-sm ring-1 ring-black/10"><h2 class="font-serif text-3xl"><?= htmlspecialchars($name) ?></h2><p class="mt-1 text-sm text-black/60"><?= htmlspecialchars($note) ?></p><div class="mt-5 grid grid-cols-2 gap-3 md:grid-cols-4"><?php foreach ($pages as [$label, $path]): $file = __DIR__ . '/' . $folder . '/' . $path; ?><?php if (is_file($file)): ?><a class="rounded-xl bg-[#f4e9d5] p-4 text-sm font-medium transition hover:-translate-y-1 hover:bg-[#581d29] hover:text-white" href="/<?= htmlspecialchars($folder) ?>/<?= htmlspecialchars($path) ?>"><?= htmlspecialchars($label) ?> ↗</a><?php else: ?><span class="rounded-xl bg-black/5 p-4 text-sm text-black/40"><?= htmlspecialchars($label) ?></span><?php endif; ?><?php endforeach; ?></div></section><?php endforeach; ?></div></main></body></html>
