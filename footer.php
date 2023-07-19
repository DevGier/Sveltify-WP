<?php if (preg_match("/(.*.local|.*.loc|localhost:.*)/i", $_SERVER['HTTP_HOST'])) : ?>
    <script type='module' src='http://localhost:5000/src/main.ts'></script>
    <script type='module' src='http://localhost:5000/@vite/client'></script>
<?php endif; ?>

<?php wp_footer(); ?>
</body>

</html>