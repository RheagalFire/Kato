<div class="container p-0 row ml-auto mr-auto mb-5 w-auto d-flex justify-content-center mt110">
    <!-- <div class="bg-light col-sm-auto  p-0 max250">
        <div data-item=1 class="bg-dark m-2 p-2 text-light">
            <img class="itemimg" src="product1.jpg" alt="Product">
            <span class="f20">Poster</span>
            <div>
                <span class="itemprice badge badge-warning f15 m-1">Rs 200</span>

            </div>
        </div>
    </div> -->
    <h2 class="m-5" style="height: 65vh;">
        <br>
        <i class="fas fa-exclamation-triangle text-warning f70"></i>
        <br>
        <br>
        No Products to display
    </h2>
</div>
<script>
$(document).on("click", ".itemimg", function() {
    let val = $(this).parent().attr("data-item");
    window.location.href = baseUrl + "/Item/" + val;
});
</script>