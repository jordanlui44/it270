<footer>
    <div class="copyright">
<ul>
    <li>Copyright <?php echo date('y'); ?></li>
    <li>My Rights Reserved </li>
    <li><a href="">Terms of use</li>

</ul>
</div>
</footer>
		<script>
		$(document).ready(function(){
			$(".nav-button").click(function () {
			$(".nav-button,.primary-nav").toggleClass("open");
			});    
		});
		</script>
<?php wp_footer();?>
</body>

</html>