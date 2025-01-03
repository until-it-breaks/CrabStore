<section class="container my-5">
    <h1 class="text-center">Your Orders</h1>
    <?php if (!empty($templateParams["orders"])): ?>
        <div class="row g-4 mt-2">
            <?php foreach ($templateParams["orders"] as $order): ?>
                <div class="col-12 col-md-6 col-lg-4">
                    <a href="order.php?id=<?php echo $order["orderId"]; ?>" class="text-decoration-none">
                        <div class="card h-100 order-card shadow">
                            <div class="card-body">
                                <h2 class="card-title">Order #<?php echo $order["orderId"]; ?></h2>
                                <p class="card-text">
                                    <span class="fw-bold">Status:</span>
                                    <span class="<?php echo getOrderBadgeClass($order["orderStatus"]); ?>"><?php echo $order["orderStatus"]; ?></span>
                                </p>
                                <p class="card-text">
                                    <span class="fw-bold">Order Date:</span>
                                    <?php echo formatDate($order["orderDate"]); ?>
                                </p>
                                <p class="card-text">
                                    <span class="fw-bold">Delivery Date:</span>
                                    <?php
                                    $deliveryDate = $order["deliveryDate"];
                                    if ($deliveryDate) {
                                        echo formatDate($deliveryDate);
                                    } else {
                                        echo "Yet to arrive";
                                    }
                                    ?>
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach ?>
        </div>
    <?php else: ?>
        <div class="text-center my-5">
            <h2 class="display-6">Nothing to show</h2>
            <p class="text-muted">You have no orders at the moment.</p>
        </div>
    <?php endif; ?>
</section>