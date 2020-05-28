$(function() {
	$('.callme_order_btn').jbcallme({ 
		postfix: "button_callback",
		fields: {
				filial: {
					type: "select",
					label: "Выберите филиал",
					options: [
						"Толе би - Гагарина",
						"Шолохова - Сейфуллина"
					]
				},
				action: {
					type: "hidden",
					value: "button_callback",
				},
		},
	});
});

$(function() {
	$('.gift_order_btn').jbcallme({ 
		postfix: "button_gift",
		fields: {
			gift_disabled: {
				type: "text",
				label: "Ваш подарок",
				value: "Сертификат на пробное посещение",
				disabled: "disabled"
			},
			gift: {
				type: "hidden",
				label: "Ваш подарок",
				value: "Сертификат на пробное посещение",
			},
			filial: {
				type: "select",
				label: "Выберите филиал",
				options: [
					"Толе би - Гагарина",
					"Шолохова - Сейфуллина"
				]
			},
			action: {
				type: "hidden",
				value: "button_gift",
			},
		},
        });
});

$(function() {
	$('.buy_order_btn').jbcallme({ 
		postfix: "button_buy",
		fields: {
			gift: {
				type: "hidden",
				label: "Хочет",
				value: "купить абонемент",
			},
			filial: {
				type: "select",
				label: "Выберите филиал",
				options: [
					"Толе би - Гагарина",
					"Шолохова - Сейфуллина"
				]
			},
			action: {
				type: "hidden",
				value: "button_buy",
			},
		},
	});
});
