<header>
    <h1>Profile</h1>
</header>
<main>
    <div class="profile">
        <div class="profile__name">
            <?php echo $data['name']; ?>
        </div>
        <div class="profile__org">
            <?php echo $data['org']; ?>
        </div>
        <div class="profile__email">
            <a href="mailto:
            <?php echo $data['email']; ?>">
            <?php echo $data['email']; ?>
            </a>
        </div>
        <div class="profile__tel">
            <a href="tel:
            <?php echo $data['tel']; ?>">
            <?php echo $data['tel']; ?>
            </a>
        </div>
        <div class="profile__adr">
            <?php echo $data['adr']; ?>
        </div>
        <div class="profile__url">
            <a href="<?php echo $data['url']; ?>">
            <?php echo $data['url']; ?>
            </a>
        </div>
        <div class="profile__photo">
            <img src="<?php echo $data['photo']; ?>" alt="<?php echo $data['name']; ?>">
        </div>
    </div>
</main>

