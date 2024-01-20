<?php
/**
 * Template Name: Multishore New
 */
get_header();
$fss = get_field("fast_secure_section"); ?>

<?php

?>
<?php if(!empty($fss)) {
    $fss_pc = $fss['process_card'];
    $fss_gto = $fss['get_to_go'];
    $fss_sc = $fss['sub_content'];
    $fss_mt = $fss['main_title'];
    $background_video = $fss['background_video'];

    ?>
    <section class="fast_secure_section">
        <div class="parallax-background" style="position:absolute; z-index: -1; width: 100%; height: 100%; filter:brightness(0.7);">
<!--             <iframe src="<?php echo $background_video; ?>" width="100%" height="100%" title="YouTube video player" frameborder="0" allow="autoplay"  frameborder="0" allowfullscreen="true" webkitallowfullscreen="true" mozallowfullscreen="true"></iframe> -->
			<video width="100%" height="100%" autoplay loop muted style="object-fit: cover;">
			  <source src="<?php echo $background_video; ?>">
			</video>

			<?php // echo do_shortcode( '[video src="'. $background_video .'" loop="on" autoplay="on" width="100%" height="100%"]' ); ?>
        </div>
        <div class="container" style="z-index:1">
            <div class="row">
                <div class="mn-title-wrap text-center">
                    <h1 class="main-title"><?php echo  $fss_mt; ?></h1>
                    <p class="sub-title"><?php echo $fss_sc; ?></p>
                    <div class="mn-button-wrap"><a href="<?php echo esc_url($fss_gto['url']); ?>" class="btn get_touch multi"><?php echo esc_attr( $fss_gto['title']); ?></a></div>
                </div>
            </div>
            <div class="row">
                <div class="mn-content-wrap">
                    <?php if(!empty($fss_pc)) {
                        foreach($fss_pc as $pc){
                            $pc_text = $pc['process_title'];
                            $pc_image = $pc['process_image'];
                            ?>
                            <div class="pcc-wrap text-center">
                                <div class="ppc-content">
                                    <img src="<?php echo $pc_image['url']; ?>" alt="<?php echo $pc_image['alt'] ?>">
                                    <h3 class="pcc-title"><?php echo esc_attr($pc_text); ?></h3>
                                   
                                </div>
                            </div>
                            <?php
                        }
                    } ?>            
                </div>
            </div>
        </div>
    </section>
    <?php

}
$wwhp = get_field("we_will_help_you");
if(!empty($wwhp)) { 
    $wwhp_title = $wwhp['main_title'];
    $wwhp_sub_title = $wwhp['sub_title'];
    $tab_content = $wwhp['tab_content'];
?>

<script src="<?php echo get_template_directory_uri() . '/assets/js/select-pure.js' ?>"></script>

<?php
$skills_set = [
    [
        "name" => "JavaScript",
        "logo" => 292,
        "skill" => [
            "Node.Js",
            "React Js",
            "Vue.Js",
            "JQuery",
            "Backbone.js",
            "Ember.Js",
            "Meteor JS",
            "Angular",
            "Polymer JS",
            "Webix",
            "Ext.JS",
        ],
    ],
    [
        "name" => "Front-end",
        "logo" => 291,
        "skill" => [
            "Node.Js",
            "React Js",
            "Vue.Js",
            "JQuery",
            "Backbone.js",
            "Ember.Js",
            "Meteor JS",
            "Angular",
            "Polymer JS",
            "Webix",
            "Ext.JS",
        ],
    ],
    [
        "name" => "Back-end Programming Languages",
        "logo" => 290,
        "skill" => [
            "Node.Js",
            "React Js",
            "Vue.Js",
            "JQuery",
            "Backbone.js",
            "Ember.Js",
            "Meteor JS",
            "Angular",
            "Polymer JS",
            "Webix",
            "Ext.JS",
        ],
    ],
    [
        "name" => "Back-end Framework",
        "logo" => 289,
        "skill" => [
            "Node.Js",
            "React Js",
            "Vue.Js",
            "JQuery",
            "Backbone.js",
            "Ember.Js",
            "Meteor JS",
            "Angular",
            "Polymer JS",
            "Webix",
            "Ext.JS",
        ],
    ],
    [
        "name" => "Back-end CMS",
        "logo" => 288,
        "skill" => [
            "Node.Js",
            "React Js",
            "Vue.Js",
            "JQuery",
            "Backbone.js",
            "Ember.Js",
            "Meteor JS",
            "Angular",
            "Polymer JS",
            "Webix",
            "Ext.JS",
        ],
    ],
    [
        "name" => "Big Data",
        "logo" => 287,
        "skill" => [
            "Node.Js",
            "React Js",
            "Vue.Js",
            "JQuery",
            "Backbone.js",
            "Ember.Js",
            "Meteor JS",
            "Angular",
            "Polymer JS",
            "Webix",
            "Ext.JS",
        ],
    ],
    [
        "name" => "Cloud Technologies",
        "logo" => 286,
        "skill" => [
            "Node.Js",
            "React Js",
            "Vue.Js",
            "JQuery",
            "Backbone.js",
            "Ember.Js",
            "Meteor JS",
            "Angular",
            "Polymer JS",
            "Webix",
            "Ext.JS",
        ],
    ],
    [
        "name" => "Packaged Suites",
        "logo" => 299,
        "skill" => [
            "Node.Js",
            "React Js",
            "Vue.Js",
            "JQuery",
            "Backbone.js",
            "Ember.Js",
            "Meteor JS",
            "Angular",
            "Polymer JS",
            "Webix",
            "Ext.JS",
        ],
    ],
];

$roles = [
    ["name" => "Operational Support", "logo" => 298],
    ["name" => "Developer", "logo" => 297],
    ["name" => "Architect", "logo" => 296],
    ["name" => "Executive", "logo" => 295],
    ["name" => "Leadership", "logo" => 294],
    ["name" => "Project Manager", "logo" => 293],
];

$employees = ["1-10", "11-50", "51-200", "201-500", "501-1000", "1000+"];

$job_types = ["Contract", "Contract to Hire", "Permanent Role"];
	
$locations = [
	[ "logo" => 304, 'name' => 'USA' ],
	[ "logo" => 302, 'name' => 'Canada' ],
	[ "logo" => 305, 'name' => 'Mexico' ],
	[ "logo" => 300, 'name' => 'Argentina' ],
	[ "logo" => 303, 'name' => 'England' ],
	[ "logo" => 301, 'name' => 'India' ],
]; 

$country_url = get_template_directory_uri() . "/assets/json/country.json";

?>
<section class="py-5" id="avihire">
	<div class="container">
		<div class="avistatech-form">
			<div class="position-fixed bottom-0 end-0 p-3" style="z-index: 60">
				<div id="avistatech-tost" class="toast align-items-center text-white bg-danger border-0" role="alert" aria-live="assertive" aria-atomic="true" data-bs-delay="3000">
					<div class="d-flex">
						<div class="toast-body">Hello, world! This is a toast message.</div>
						<button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
					</div>
				</div>
			</div>
			<div class="avistatech-form-title text-center">
				<h2><?php echo $multishore_form_title = get_field( 'multishore_form_title' ); ?></h2>
			</div>
			<div class="avistatech-form-progress">
				<span class="progress-dots active"></span>
				<span class="progress-dots"></span>
				<span class="progress-dots"></span>
			</div>
			<div class="avistatech-form-main-container">
				<div class="avistatech-form-stap avistatech-form-stap-1" data-index="1">
					<div class="row justify-content-center">
						<div class="col-12 col-lg-8">
							<div class="avistatech-form-skill-box">
								<h3 class="text-center mb-4"><?php echo $multishore_skills_title = get_field( 'multishore_skills_title' ); ?></h3>
								<input type="text" id="avistatech-skill-text" class="form-control mb-4" placeholder="Type Something Here">
								<div class="row gy-3 gy-lg-4">
									<?php if( have_rows('skills') ): while( have_rows('skills') ) : the_row(); ?>
									<?php
										$skill_name = get_sub_field( 'skill_name' );
										$skill_image = get_sub_field( 'skill_image' );
										$skill_hover_image = get_sub_field( 'skill_hover_image' );
										$skill_slug = sanitize_title( $skill_name );
									?>
									<div class="col-12 col-sm-6 col-md-4 col-lg-3 position-relative">
										<div class="avistatech-card avistatech-skill-card" data-skill-name="<?php echo $skill_name; ?>">
											<div>
												<div class="avistatech-card-image mb-2">
													<?php //echo wp_get_attachment_image( $skill_image ); ?>
													<?php echo wp_get_attachment_image( $skill_image, 'full', false ,['class' => 'img_white'] ); ?>
													<?php echo wp_get_attachment_image( $skill_hover_image, 'full', false, ['class' => 'active_hover'] ); ?>
												</div>
												<h6 class="mb-0"><?php echo $skill_name; ?></h6>
											</div>
										</div>
										
										<div class="avistatech-hover-card" data-skill-name="<?php echo $skill_name; ?>">
											<div class="row gy-1">
												<?php if( have_rows('sub_skill') ): while( have_rows('sub_skill') ) : the_row(); 
													$skill_id = uniqid( 'skill-' ); $sub_skill = get_sub_field( 'sub_skill_name' ); ?>
													<div class="col-12 col-sm-6">
														<div class="form-check form-check-inline">
															<input class="form-check-input" name="avistatech-skill" type="checkbox" id="<?php echo $skill_id; ?>" value="<?php echo $sub_skill; ?>">
															<label class="form-check-label" for="<?php echo $skill_id; ?>"><?php echo $sub_skill; ?></label>
														</div>
													</div>
												<?php endwhile; endif; ?>
											</div>
										</div>
									</div>
									<?php endwhile; endif; ?>
								</div>
							</div>
						</div>
					</div>
					<div class="avistatech-form-role-box mt-4 mt-lg-5">
						<h3 class="text-center mb-4"><?php echo $multishore_role_title = get_field( 'multishore_role_title' ); ?></h3>
						<div class="row gy-4 gy-xl-0 justify-content-center row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-6">
							
							<?php if( have_rows('roles') ): while( have_rows('roles') ) : the_row(); 
							$role_name = get_sub_field( 'role_name' ); $role_image = get_sub_field( 'role_image' ); $role_hover_image = get_sub_field( 'role_hover_image' ); ?>
							
							<div class="col">
								<div class="avistatech-card avistatech-role-card" data-role-name="<?php echo $role_name; ?>">
									<div>
										<div class="avistatech-card-image mb-2">
											<?php //echo wp_get_attachment_image( $role_image ); ?>
											<?php echo wp_get_attachment_image( $role_image, 'full', false ,['class' => 'img_white'] ); ?>
											<?php echo wp_get_attachment_image( $role_hover_image, 'full', false, ['class' => 'active_hover'] ); ?>
										</div>
										<h6 class="mb-0"><?php echo $role_name; ?></h6>
									</div>
								</div>
							</div>
							
							<?php endwhile; endif; ?>
						</div>
					</div>
					<div class="mt-4 mt-lg-5 text-center">
						<a href="#" class="btn avistatech-step-1-btn">Continue</a>
					</div>
				</div>
				<div class="avistatech-form-stap avistatech-form-stap-2" data-index="2">
					<div class="avistatech-from-employees-box mb-4 mb-lg-5">
						<h3 class="text-center mb-4"><?php echo $multishore_employees_title = get_field( 'multishore_employees_title' ); ?></h3>
						<div class="row justify-content-center row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-6 gy-4 gy-xl-0">
							
							<?php if( have_rows('employees') ): while( have_rows('employees') ) : the_row(); 
							$employees_name = get_sub_field( 'employees_number' ); ?>
							
							<div class="col">
								<div class="avistatech-card avistatech-employee-card" data-employees="<?php echo $employees_name; ?>">
									<h6 class="mb-0"><?php echo $employees_name; ?></h6>
								</div>
							</div>
							
							<?php endwhile; endif; ?>
						</div>
					</div>
					<div class="avistatech-from-job-box mb-4">
						<h3 class="text-center mb-4"><?php echo $multishore_job_type_title = get_field( 'multishore_job_type_title' ); ?></h3>
						<div class="row justify-content-center row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-6 gy-4 gy-xl-0">
							
							<?php if( have_rows('job_type') ): while( have_rows('job_type') ) : the_row(); 
							$job_name = get_sub_field( 'job_name' ); ?>
							
							<div class="col">
								<div class="avistatech-card avistatech-job-card" data-job="<?php echo $job_name; ?>">
									<h6 class="mb-0"><?php echo $job_name; ?></h6>
								</div>
							</div>
							
							<?php endwhile; endif; ?>

						</div>
					</div>
					<div class="avistatech-from-location-box">
						<h3 class="text-center mb-3"><?php echo $multishore_preferred_location_title = get_field( 'multishore_preferred_location_title' ); ?></h3>
						<div class="row row-cols-2 row-cols-sm-3 row-cols-lg-6 gy-4 justify-content-center">
							
							<?php if( have_rows('preferred_location') ): while( have_rows('preferred_location') ) : the_row(); 
							$location_name = get_sub_field( 'location_name' ); $location_image = get_sub_field( 'location_image' ); ?>
							
							<div class="col text-center">
								<div class="location-card" data-location="<?php echo $location_name; ?>">
									<div>
										<div class="location-card-image">
											<?php echo wp_get_attachment_image( $location_image ); ?>
										</div>
										<div class="location-title mt-2"><?php echo $location_name; ?></div>
									</div>
								</div>
							</div>
							
							<?php endwhile; endif; ?>
							
						</div>
						<div class="avistatech-contry-list mt-4" id="avistatech-contry-list">
							
						</div>
					</div>
					<div class="mt-4 mt-lg-5 text-center">
						<a href="#" class="btn avistatech-step-2-btn">Continue</a>
					</div>
				</div>
				<div class="avistatech-form-stap avistatech-form-stap-3" data-index="3">
					<div class="avistatech-form-box text-center">
						<h3 class="mb-3 mb-lg-4">Please fill out the following details</h3>
						<div class="row gy-3 mb-3 mb-lg-4">
							<div class="col-12">
								<input type="text" class="form-control" name="avistatech-form-company-name" id="avistatech-form-company-name" placeholder="Company Name">
							</div>
							<div class="col-12 col-lg-6">
								<input type="text" class="form-control" name="avistatech-form-first-name" id="avistatech-form-first-name" placeholder="First Name">
							</div>
							<div class="col-12 col-lg-6">
								<input type="text" class="form-control" name="avistatech-form-last-name" id="avistatech-form-last-name" placeholder="Last Name">
							</div>
							<div class="col-12 col-lg-6">
								<input type="email" class="form-control" name="avistatech-form-email" id="avistatech-form-email" placeholder="Email">
							</div>
							<div class="col-12 col-lg-6">
								<input type="tel" class="form-control" name="avistatech-form-phone" id="avistatech-form-phone" placeholder="Phone Number">
							</div>
						</div>
						<h4 class="mb-3">Which mode of contact is best suited for you?</h4>
						<div class="text-center mb-4">
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="avistatech-form-contact" id="avistatech-form-contact-email" value="Email">
								<label class="form-check-label" for="avistatech-form-contact-email">Email</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="avistatech-form-contact" id="avistatech-form-contact-call" value="Call">
								<label class="form-check-label" for="avistatech-form-contact-call">Call</label>
							</div>
						</div>
						<div class="text-center mb-4">
						<div class="g-recaptcha" data-sitekey="6Le3ncMfAAAAALJh5kdh33UjoCy_utCh9ONusmJn"></div>
						</div>
						<div class="">
							<button class="btn avistatech-submit">Submit</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<script>
	let multipal_dropdown;
	let scrollTop = jQuery(".avistatech-form").offset().top;
	const scrollForm = () => {
		jQuery('html, body').animate({
			scrollTop: scrollTop
		}, 1000);
	};
	fetch("<?php echo $country_url; ?>").then(a => a.json()).then(a => {
		let option = [];
		for (const c of a) option.push( {label: c.name, value: c.name})
		multipal_dropdown = new SelectPure("#avistatech-contry-list", { 
			options: option,
			multiple: true,
			autocomplete: true,
			icon: "fa fa-times",
			inlineIcon: false,
			placeholder: "Type here if you prefer any other location",
			classNames: {
				select: "select-pure__select",
				dropdownShown: "select-pure__select--opened",
				multiselect: "select-pure__select--multiple",
				label: "select-pure__label",
				placeholder: "select-pure__placeholder",
				dropdown: "select-pure__options",
				option: "select-pure__option",
				autocompleteInput: "select-pure__autocomplete",
				selectedLabel: "select-pure__selected-label",
				selectedOption: "select-pure__option--selected",
				placeholderHidden: "select-pure__placeholder--hidden",
				optionHidden: "select-pure__option--hidden",
			}
		});
	});
	jQuery(document).ready(function ($) {
		let a = document.getElementById("avistatech-tost"),
			b = new bootstrap.Toast(a),
			c = jQuery(a).find(".toast-body"),
			d = {},
			e = jQuery(".avistatech-skill-card"),
			f = jQuery(".avistatech-hover-card");
		jQuery(".avistatech-form-skill-box").on("click", ".avistatech-skill-card", function (a) {
			a.preventDefault(), a.stopImmediatePropagation(), a.stopPropagation();
			let b = jQuery(this);
			jQuery(".avistatech-skill-card.active").not(b).removeClass("active"), b.toggleClass("active")
		});
		jQuery(document).on("click", function (a) {
			let b = jQuery(".avistatech-form-skill-box").is(a.target),
				c = jQuery(".avistatech-form-skill-box").has(a.target).length;
			!1 == b && 0 == c && jQuery(f).each(function (b, c) {
				jQuery(c).is(a.target) || jQuery(c).prev().removeClass("active")
			})
		});
		jQuery("input[name='avistatech-skill']").on("change", function (a) {
			a.preventDefault(), a.stopImmediatePropagation(), a.stopPropagation();
			let b = jQuery(this),
				c = b.parents(".avistatech-hover-card"),
				d = c.prev(),
				e = c.find("input[name='avistatech-skill']:checked").length;
			1 <= e ? d.addClass("selected") : d.removeClass("selected")
		});
		jQuery(".avistatech-role-card").on("click", function (a) {
			a.preventDefault(), a.stopImmediatePropagation(), a.stopPropagation(), jQuery(this).toggleClass("selected")
		});
		jQuery(".location-card").on("click", function (a) {
			a.preventDefault(), a.stopImmediatePropagation(), a.stopPropagation(), jQuery(this).toggleClass("active")
		});
		jQuery(".avistatech-employee-card").on("click", function (a) {
			a.preventDefault(), a.stopImmediatePropagation(), a.stopPropagation(), jQuery(".avistatech-employee-card").removeClass("selected"), jQuery(this).toggleClass("selected")
		});
		jQuery(".avistatech-job-card").on("click", function (a) {
			a.preventDefault(), a.stopImmediatePropagation(), a.stopPropagation();
			jQuery(this).toggleClass("selected");
		});
		jQuery(".avistatech-step-1-btn").on("click", function (a) {
			a.preventDefault(), a.stopImmediatePropagation(), a.stopPropagation();
			let e = jQuery(".avistatech-form-skill-box .avistatech-skill-card.selected"),
				f = jQuery(".avistatech-form-role-box .avistatech-role-card.selected"),
				g = jQuery("#avistatech-skill-text").val();
			d.skillText = g;
			let h = [];
			if (0 == e.length) h.push("Please Select skills");
			else {
				let a = [];
				jQuery(e).each(function () {
					let b = jQuery(this),
						c = b.next(),
						d = c.find("input[name=\"avistatech-skill\"]:checked");
					if (d.length) {
						let c = b.data("skill-name"),
							e = [];
						d.each(function () {
							e.push(jQuery(this).val())
						}), a.push({
							name: c,
							skill: e.join(", ")
						})
					}
				}), a.length && (d.skill = a)
			}
			if (0 == f.length) h.push("Please Select Roles");
			else {
				let a = [];
				jQuery(f).each(function () {
					a.push(jQuery(this).data("role-name"))
				}), a.length && (d.roles = a.join(", "))
			}
			h.length ? (c.html(h.join("<br>")), b.show()) : (jQuery(".avistatech-form-progress .progress-dots").eq(1).addClass("active"), jQuery(".avistatech-form-stap-1").hide(), jQuery(".avistatech-form-stap-2").show(), scrollForm())
		});
		jQuery(".avistatech-step-2-btn").on("click", function (a) {
			a.preventDefault(), a.stopImmediatePropagation(), a.stopPropagation();
			let e = jQuery(".avistatech-from-employees-box .avistatech-employee-card.selected"),
				f = jQuery(".avistatech-from-job-box .avistatech-job-card.selected"),
				g = jQuery(".avistatech-from-location-box .location-card.active"),
				k = multipal_dropdown.value(),
				j = [],
				l = [],
				h = [];
				if( f.length) {	f.each(function() { l.push( jQuery(this).data( 'job' ) ) }); }
				if( g.length) {	g.each(function() { j.push( jQuery(this).data( 'location' ) ) }); }
				if(  k && k.length ) { j = j.concat(k); }
			0 == e.length ? h.push("Please Select Number of employees.") : d.employees = jQuery(e).data("employees"), l.length ? d.job = l.join(", ") : h.push("Please Select job type."), j.length ? d.country = j.join(", ") : h.push("Please Select Preferred Location."), h.length ? (c.html(h.join("<br>")), b.show()) : (jQuery(".avistatech-form-progress .progress-dots").eq(2).addClass("active"), jQuery(".avistatech-form-stap-2").hide(), jQuery(".avistatech-form-stap-3").show(), scrollForm())
		});
		jQuery(".avistatech-submit").on("click", function (f) {
			f.preventDefault(), f.stopImmediatePropagation(), f.stopPropagation();
			let e = [],
				g = jQuery(this),
				h = jQuery("#avistatech-form-company-name").val().trim(),
				i = jQuery("#avistatech-form-first-name").val().trim(),
				j = jQuery("#avistatech-form-last-name").val().trim(),
				k = jQuery("#avistatech-form-email").val().trim(),
				l = jQuery("#avistatech-form-phone").val().trim(),
				m = jQuery("input[name='avistatech-form-contact']:checked").val();
			h ? d.company_name = h : e.push("Please Enter Company Name."), i ? d.first_name = i : e.push("Please Enter First Name."), j ? d.last_name = j : e.push("Please Enter Last Name."), k ? k.match(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/) ? d.email = k : e.push("Please Enter Valid Email Address.") : e.push("Please Enter Email Address."), l ? l.match(/^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/) ? d.phone = l : e.push("Please Enter Valid Phone Number.") : e.push("Please Enter Phone Number."), m ? d.contact = m : e.push("Please select contact mode."), e.length ? (c.html(e.join("<br>")), b.show()) : (jQuery.ajax({
				type: "POST",
				url: wp_ajax_url,
				data: {
					action: "avistatechform_request",
					form_data: d
				},
				beforeSend: function () {
					g.prop("disabled", !0).addClass("disabled")
				},
				success: function (d) {
					if( d.success ) {
					   jQuery(a).removeClass("bg-danger").addClass("bg-success");
						setTimeout(() => { location.reload(); }, 3000);
					} else {
					    g.prop("disabled", !1).removeClass("disabled");
					}
					c.text(d.data), b.show()
				},
				error: function () {
					c.text("Something went wrong please try again."), b.show(), g.prop("disabled", !1).removeClass("disabled")
				}
			}))
		});
	});
	
</script>

<section class="help-us-section">
    <div class="container">
        <div class="row">
            <div class="text-center">
                <h2 class="ovus-title"><?php echo $wwhp_title; ?></h2>
                <span class="ovus-sub-title"><?php echo $wwhp_sub_title ?></span>
            </div>
        </div>
        <div class="help-us-tab-content">
            <div class="row">
                <div class="col-md-4">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <?php 
                        $i = 0;
                        foreach($tab_content as $tc) {
                            $title = $tc['title'];
                            $active_class = 0;
                            if($i == 0 ) { $active_class = "active"; }
                            ?>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link <?php echo $active_class; ?>" id="tab-<?php echo $i; ?>-tab" data-bs-toggle="tab" data-bs-target="#tab-<?php echo $i; ?>" type="button" role="tab" aria-controls="tab-<?php echo $i; ?>" aria-selected="true"><?php echo $title; ?></button>
                                
                            </li>
                            <?php
                            $i++;
                        }
                        ?>
                    </ul>
                  
                </div>
                <div class="col-md-8">
                    <div class="tab-content">
                        <?php 
                         $i = 0;
                         foreach($tab_content as $tc) {
                            $title = $tc['title'];
                             $image = $tc['image'];
                             $content = $tc['content'];
                             $hire_us_button = $tc['hire_us_button'];
                             $request_callback_button = $tc['request_callback_button'];
                             $active_class = "";
                             if($i == 0 ) { $active_class = "active"; }
                             ?>
                            <div class="tab-pane <?php echo $active_class; ?>" id="tab-<?php echo $i; ?>" role="tabpanel" aria-labelledby="tab-<?php echo $i; ?>">
                                <div class="row">
                                    <?php 
                                    if(!empty($image['url'])) {
                                        echo '<div class="col-md-6"><div class="img-block"><img src="'.$image['url'].'" alt="'.$title.'"></div></div>';
                                    }
                                    if(!empty($content) || !empty($hire_us_button['url']) || !empty($request_callback_button['url'])) {
                                        echo '<div class="col-md-6">'; 
                                        
                                        if(!empty($content) ) {
                                            echo '<div class="help-tab-content">'.$content.'</div>';
                                        }
                                        if( !empty($hire_us_button['url']) || !empty($request_callback_button['url'])) {
                                            echo '<div class="help-button">';
                                        }
                                        if( !empty($hire_us_button['url'])) {
                                            echo '<a href="'.$hire_us_button['url'].'" class="btn get_touch">'.$hire_us_button['title'].'</a>';
                                        }
                                        if( !empty($request_callback_button['url'])) {
                                            echo '<a href="'.$request_callback_button['url'].'" class="btn white">'.$request_callback_button['title'].'</a>';
                                        }
                                        if( !empty($hire_us_button['url']) || !empty($request_callback_button['url'])) {
                                            echo '</div>';
                                        }
                                        echo '</div>';
                                    }
                                    ?>
                                </div>
                            </div>
                             <?php
                             $i++;
                         }
                        ?>
                        
                    </div>
                </div>
                

            </div>
        </div>
    </div>
</section>
<?php
}
$ovus = get_field("other_vs_us_section");
if(!empty($ovus)) { 
    $ovus_title = $ovus['main_title'];
    $ovus_sub_title = $ovus['sub_title'];
    $ovus_sub_content = $ovus['sub_content'];
    $other_section_title = $ovus['other_section_title'];
    $us_section_title = $ovus['us_section_title'];
    $other_content = $ovus['other_content'];
    $us_content = $ovus['us_content'];

    ?>
    <section class="ovus-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-5 mb-0 mb-md-3">
                    <h2 class="ovus-title"><?php echo $ovus_title; ?></h2>
                    <span class="ovus-sub-title"><?php echo $ovus_sub_title ?></span>
                    <p class="ovus-sub-content"><?php echo $ovus_sub_content; ?></p>
                </div>
                <div class="col-md-12 col-lg-7 p-sm-0">
                    <div class="row">
                        <div class="col-md-6 p-0 other-section">
                            <div class="osp-wrap">
                                <div class="other_section_title"><?php echo $other_section_title; ?></div>
                                <div class="osp-con">
                                        <?php 
                                        if(!empty($other_content)) {
                                            echo '<ul>';
                                            foreach($other_content as $os) {
                                                $content = $os['content'];
                                                echo '<li>'.$content.'</li>';
                                            }
                                            echo '</ul>';
                                        }
                                        ?>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6 p-0 us-section">
                            <div class="osp-wrap">
                                <div class="us_section_title"><?php echo $us_section_title; ?></div>
                                <div class="osp-con" id="us-tit">
                                        <?php 
                                        if(!empty($us_content)) {
                                            echo '<ul>';
                                            foreach($us_content as $os) {
                                                $content = $os['content'];
                                                echo '<li>'.$content.'</li>';
                                            }
                                            echo '</ul>';
                                        }
                                        ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
    </section>
    <?php
}
?>

<?php 
$cta_section = get_field("cta_section");
if(!empty($cta_section)) {
$cta_title = $cta_section['main_title'];
$connect_button = $cta_section['connect_button'];
$cta_bg = $cta_section['background_image'];
?>
<!--<section class="cta-section">-->
<!--    <div class="container" style="background-image:url('<?php echo $cta_bg['url']; ?>')">-->
<!--        <div class="row">-->
<!--            <div class="cta-wrap text-center">-->
<!--                <h2 class="cta-title"><?php echo $cta_title; ?></h2>-->
<!--                  <a class="btn get_touch" href="<?php echo $connect_button['url']; ?>"><?php echo $connect_button['title']; ?></a>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->
<?php } ?>
<?php get_footer(); ?>