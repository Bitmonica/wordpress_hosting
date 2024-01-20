// Location code
			if( jQuery( ".mainTabing" ).length ) {
				jQuery( ".mainTabing .map-dots span" ).on("mouseenter", function(e) {
					if( !jQuery(this).hasClass('active') ){
					 	jQuery( ".mainTabing .map-dots span" ).not(this).removeClass('active');
					 	jQuery( this  ).addClass('active');
					}
				})
			}

            // Home Form Code
			jQuery(document).ready(function () {
				if (jQuery("form.multisteps-form__form").length) {
					let a = {},
						b = document.getElementById("multisteps-avistatech-tost"),
						c = new bootstrap.Toast(b),
						f = jQuery(b).find(".toast-body");
					
					jQuery(".stepone input[name='industryradio']").on("click", function(e) {
						e.preventDefault(), e.stopImmediatePropagation(), e.stopPropagation();
						a.industry = jQuery( this ).val();
						jQuery(".stepone").removeClass("js-active"), jQuery(".steptwo, .address").addClass("js-active");
					});
					jQuery(".steptwo input[name='whatindustry']").on("click", function(e) {
						e.preventDefault(), e.stopImmediatePropagation(), e.stopPropagation();
						a.business = jQuery( this ).val();
						jQuery(".stepone, .steptwo").removeClass("js-active");
						jQuery(".stepthree, .orderinfo").addClass("js-active");
					});
					
					jQuery(".stepthree input[name='engagementmodel']").on("click", function(e) {
						e.preventDefault(), e.stopImmediatePropagation(), e.stopPropagation();
						a.engagement = jQuery( this ).val();
						jQuery(".stepone, .steptwo, .stepthree").removeClass("js-active");
						jQuery(".stepfour, .otherdetails").addClass("js-active");
					});
					jQuery("#stepfour-submit-btn").click(function (d) {
						d.preventDefault(), d.stopImmediatePropagation(), d.stopPropagation();
						let e = jQuery(this),
							g = [],
							h = jQuery("#mf-first-name").val().trim(),
							i = jQuery("#mf-last-name").val().trim(),
							j = jQuery("#mf-email").val().trim(),
							k = jQuery("#mf-phone").val().trim();
						h ? a.first_name = h : g.push("Please Enter First Name"), i ? a.last_name = i : g.push("Please Enter Last Name"), j ? j.match(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/) ? a.email = j : g.push("Please Enter Valid Email Address") : g.push("Please Enter Email Address"), k ? k.match(/^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/) ? a.phone = k : g.push("Please Enter Valid Phone Number") : g.push("Please Enter Phone Number"), 0 === g.length ? jQuery.ajax({
							type: "POST",
							url: wp_ajax_url,
							data: {
								action: "avistatech_expert_help_request",
								form_data: a
							},
							beforeSend: function () {
								e.prop("disabled", !0).addClass("disabled")
							},
							success: function (a) {
								if( a.success ) {
									jQuery(b).removeClass("bg-danger").addClass("bg-success");
									setTimeout(() => { location.reload(); }, 3000);
								} else {
									e.prop("disabled", !1).removeClass("disabled");
								}
								f.text(a.data), c.show();
							},
							error: function () {
								f.text("Something went wrong please try again."), c.show(), e.prop("disabled", !1).removeClass("disabled")
							}
						}) : (f.html(g.join("</br>")), c.show())
					})
				}
			});

			// carrer code
			jQuery(".careerform").css("display","none")
			jQuery(".career_Section .industry").on("click",function(){
			    jQuery(".careerform").css("display","block")
			});
			
			let career_alert = document.getElementById('career-notice');
			function alert(message, type) {
			  var wrapper = document.createElement('div')
			  career_alert.innerHTML = '<div class="alert text-left small alert-' + type + ' alert-dismissible" role="alert">' + message + '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>'
				
				setTimeout(function() {
					career_alert.innerHTML = '';
				}, 3000);

			  //career_alert.append(wrapper)
			}
			
			const careersfileInput = document.getElementById("careers-file");
			if(careersfileInput){
              careersfileInput.addEventListener("change", fileUpload, false);
            }
			//careersfileInput.addEventListener("change", fileUpload, false);
			
			function fileUpload() {
				const fileList = this.files;
				if( fileList.length === 1 ) {
					let file_name = fileList[0].name,
						file_size = fileList[0].size,
						file_type = fileList[0].type;
					jQuery( ".careers-filename" ).text(file_name);
				} else {
					jQuery( ".careers-filename" ).text("Select files");
				}
			}

			
			jQuery( "#careers-submit-btn" ).click(function(e) {
				e.preventDefault(), e.stopImmediatePropagation(), e.stopPropagation();
				let btn = jQuery(this),
					fname = jQuery( "#career-firstname" ).val().trim(),
					lname = jQuery( "#career-lastname" ).val().trim(),
					email = jQuery( "#career-email" ).val().trim(),
					phone = jQuery( "#career-phone" ).val().trim(),
					course =jQuery( "input[name='career-option']:checked" ).val();
				
				let error = [];
				if( ! course ) { error.push( "Please Select Course" ); }
				if( ! fname ) { error.push( "Please Enter First Name" ); }
				if( ! lname ) { error.push( "Please Enter Last Name" ); }
				if( email ) {
					if( ! email.match(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/) ) {
						error.push( "Please Enter valid Email Address" );	
					}
				} else { error.push( "Please Enter Email Address" ); }
				if( phone ) {
					if( ! phone.match(/^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/) ) {
						error.push( "Please Enter valid Phone Number" );	
					}
				} else { error.push( "Please Enter Phone Number" ); }
				if( careersfileInput.files.length != 1 ) {
					error.push( "Please Upload File" );
				}
				
				if( error.length === 0 ) {
					const file_reader = new FormData();
					file_reader.append('action', 'careers_form_request');
					file_reader.append('fname', fname);
					file_reader.append('lname', lname);
					file_reader.append('email', email);
					file_reader.append('phone', phone);
					file_reader.append('course', course);
					file_reader.append('file', careersfileInput.files[0]);
					
					jQuery.ajax({
						type: "POST",
						url: wp_ajax_url,
						processData: false,
						contentType: false,
						data: file_reader,
						beforeSend: function() { btn.addClass( 'disabled' ).prop( 'disabled', true ) },
						success: function( responce ) {
							if( responce.success ) {
								alert( responce.data, 'success');
								setTimeout(() => { location.reload(); }, 2000);
							} else {
								alert( responce.data, 'danger');
								btn.removeClass( 'disabled' ).prop( 'disabled', false );
							}
						},
						error: function() { alert( 'Something went wrong please try again.', 'danger'); btn.removeClass( 'disabled' ).prop( 'disabled', false ); }
					})
				} else {
					alert( error.join('<br>'), 'danger');
				}
				
			})