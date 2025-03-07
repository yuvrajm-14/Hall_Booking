$(function(){

	$('#booking_form').validate({
		rules:{
			hall:{
				required: true
			},
			event:{
				required: true	
			},
			date:{
				required: true
			},
			start_time:{
				required: true,
				
			},
			end_time:{
				required: true,
				
			}
		}
	});


	$('#register_form').validate({
		rules:{
			name:{
				required: true
			},
			mobile:{
				required: true,
				pattern: '^[0-9]*$'	
			},
			password:{
				required: true
			}
			
		}
	});


	$('#add_inventory').validate({
		rules:{
			
			quantity:{
				required: true,
				pattern: '^[0-9]*$'
				
			},
			product_type:{
				required: true
				
				
			},
			product:{
				required: true
				
			}
			
		}
	});

	$('#add_money').validate({
		rules:{
			
			amount:{
				required: true,
				pattern: '^[0-9]*$'
				
			}
			
		}
	});

	$('#add_transaction').validate({
		rules:{
			
			amount:{
				required: true,
				pattern: '^[0-9]*$',
			},
			client_name:{
				required: true,

			},
			advance:{
				required: true,
				pattern: '^[0-9]*$',
				
			},
			details:{
				required: true,
				
			},
			remain:{
				required: true,
				pattern: '^[0-9]*$',
			}
			
		}
	});

	$('#add_hall').validate({
		rules:{
			name:{
				required: true,
				pattern: '[A-Za-z ]'
			},
			description:{
				required: true,
				pattern: '[A-Za-z ]'
			},
			img1:{
				required:true,
                accept:"image/jpeg,image/png",
                // filesize: 200000   //max size 200 kb
			},
			img2:{
				required:true,
                accept:"image/jpeg,image/png",
                // filesize: 200000   //max size 200 kb
			},
			img3:{
				required:true,
                accept:"image/jpeg,image/png",
                // filesize: 200000   //max size 200 kb
			},
			img4:{
				required:true,
                accept:"image/jpeg,image/png",
                // filesize: 200000   //max size 200 kb
			},
			img5:{
				required:true,
                accept:"image/jpeg,image/png",
                // filesize: 200000   //max size 200 kb
			},
			thumb:{
				required:true,
                accept:"image/jpeg,image/png",
                // filesize: 200000   //max size 200 kb
			},
			
			address:{
				required: true,
			},
			location:{
				required: true,
			},
			capacity:{
				required: true,
				pattern: '^[0-9 ]*$',
			},
			status:{
				required: true,
			},
			owner_name:{
				required: true,
				pattern: '[A-Za-z ]'
			},
			owner_username:{
				required: true,
			},
			owner_password:{
				required: true,
			}


		},
		messages: {
                img1:{
                    // filesize:" file size must be less than 200 KB.",
                    accept:"Please upload .jpg or .png file.",
                    required:"Please upload file."
                },
                img2:{
                    // filesize:" file size must be less than 200 KB.",
                    accept:"Please upload .jpg or .png file.",
                    required:"Please upload file."
                },
                img3:{
                    // filesize:" file size must be less than 200 KB.",
                    accept:"Please upload .jpg or .png file.",
                    required:"Please upload file."
                },
                img4:{
                    // filesize:" file size must be less than 200 KB.",
                    accept:"Please upload .jpg or .png file.",
                    required:"Please upload file."
                },
                img5:{
                    // filesize:" file size must be less than 200 KB.",
                    accept:"Please upload .jpg or .png file.",
                    required:"Please upload file."
                },
                thumb:{
                    // filesize:" file size must be less than 200 KB.",
                    accept:"Please upload .jpg or .png file.",
                    required:"Please upload file."
                }
        }
	});

	$('#edit_hall').validate({
		rules:{
			name:{
				required: true,
				pattern: '[A-Za-z ]'
			},
			description:{
				required: true,
				pattern: '[A-Za-z ]'
			},
			img1:{
				// required:true,
                accept:"image/jpeg,image/png",
                // filesize: 200000   //max size 200 kb
			},
			img2:{
				// required:true,
                accept:"image/jpeg,image/png",
                // filesize: 200000   //max size 200 kb
			},
			img3:{
				// required:true,
                accept:"image/jpeg,image/png",
                // filesize: 200000   //max size 200 kb
			},
			img4:{
				// required:true,
                accept:"image/jpeg,image/png",
                // filesize: 200000   //max size 200 kb
			},
			img5:{
				// required:true,
                accept:"image/jpeg,image/png",
                // filesize: 200000   //max size 200 kb
			},
			thumb:{
				// required:true,
                accept:"image/jpeg,image/png",
                // filesize: 200000   //max size 200 kb
			},
			
			address:{
				required: true,
			},
			location:{
				required: true,
			},
			capacity:{
				required: true,
				pattern: '^[0-9 ]*$',
			},
			status:{
				required: true,
			},
			owner_name:{
				required: true,
				pattern: '[A-Za-z ]'
			},
			owner_username:{
				required: true,
			},
			owner_password:{
				required: true,
			}


		},
		messages: {
                img1:{
                    // filesize:" file size must be less than 200 KB.",
                    accept:"Please upload .jpg or .png file.",
                    required:"Please upload file."
                },
                img2:{
                    // filesize:" file size must be less than 200 KB.",
                    accept:"Please upload .jpg or .png file.",
                    required:"Please upload file."
                },
                img3:{
                    // filesize:" file size must be less than 200 KB.",
                    accept:"Please upload .jpg or .png file.",
                    required:"Please upload file."
                },
                img4:{
                    // filesize:" file size must be less than 200 KB.",
                    accept:"Please upload .jpg or .png file.",
                    required:"Please upload file."
                },
                img5:{
                    // filesize:" file size must be less than 200 KB.",
                    accept:"Please upload .jpg or .png file.",
                    required:"Please upload file."
                },
                thumb:{
                    // filesize:" file size must be less than 200 KB.",
                    accept:"Please upload .jpg or .png file.",
                    required:"Please upload file."
                }
        }
	});


	$('#add_staff').validate({
		rules:{
			name:{
				required: true,
				pattern: '[A-Za-z ]'
			},
			mobile:{
				required: true,
				pattern: '^[0-9]*$',
				
			},
			staff_type:{
				required: true
			},
			joining_date:{
				required: true
			},
			address:{
				required: true,
			},


		}
		
	});

	$('#add_purchase').validate({
		rules:{
			order_amount:{
				required: true,
				pattern: '^[0-9]*$',
			},
			date:{
				required: true,
			},
			product_type:{
				required: true,
			},
			product:{
				required: true,
			},
			payment_type:{
				required: true,
			},
			location:{
				required: true,
			},
			quantity:{
				required: true,
				pattern: '^[0-9 ]*$',
			}

		}
	});


});