# Eeasy Digital Downloads modeling of stock and capacity

## Initial state
One Series with 4 Series Passes, each with a different capacity setting.

-- Series (shared capacity of 345)
post_id	meta_key	meta_value
31	_tribe_hide_attendees_list
31	_tribe_default_ticket_provider	Tribe__Tickets_Plus__Commerce__EDD__Main
31	_tec-series-show-title	1
31	_tec_autogenerated_checksum	2c0a225bcac0b7497a87259f0d4f5098
31	_tec_autogenerated	1
31	_edit_lock	1683195016:1
31	_tribe_ticket_capacity	345
31	_tribe_ticket_version	5.6.0-dev
31	_tribe_ticket_use_global_stock	1
31	_tribe_ticket_global_stock_level	345
31	_EventCost	23.00
31	_EventCost	45.00
31	_EventCost	67.00
31	_EventCost	89.00

-- Series Pass (unlimited capacity)
post_id	meta_key	meta_value
32	_tribe_eddticket_for_event	31
32	_tribe_ticket_show_description	yes
32	_manage_stock	no
32	_tribe_ticket_capacity	-1
32	_tribe_ticket_version	5.6.0-dev
32	ticket_price	23.00
32	edd_price	23.00
32	_tribe_tickets_ar_iac	none
32	_tribe_tickets_meta	a:0:{}
32	_type	series_pass
32	_ticket_start_date	2023-05-04 00:00:00

-- Series Pass (shared capacity of 345)
post_id	meta_key	meta_value
34	_tribe_eddticket_for_event	31
34	_tribe_ticket_show_description	yes
34	_global_stock_mode	global
34	_stock	345
34	_stock_status	instock
34	_backorders	no
34	_manage_stock	yes
34	_tribe_ticket_version	5.6.0-dev
34	_tribe_ticket_capacity	345
34	ticket_price	45
34	edd_price	45.00
34	_tribe_tickets_ar_iac	none
34	_tribe_tickets_meta	a:0:{}
34	_type	series_pass
34	_ticket_start_date	2023-05-04 00:00:00

-- Series Pass (capped capacity of 123)
post_id	meta_key	meta_value
35	_tribe_eddticket_for_event	31
35	_tribe_ticket_show_description	yes
35	_global_stock_mode	capped
35	_stock	123
35	_stock_status	instock
35	_backorders	no
35	_manage_stock	yes
35	_tribe_ticket_capacity	123
35	ticket_price	67
35	edd_price	67.00
35	_tribe_ticket_version	5.6.0-dev
35	_tribe_tickets_ar_iac	none
35	_tribe_tickets_meta	a:0:{}
35	_type	series_pass
35	_ticket_start_date	2023-05-04 00:00:00

-- Series Pass (own capacity of 200)
post_id	meta_key	meta_value
36	_tribe_eddticket_for_event	31
36	_tribe_ticket_show_description	yes
36	_global_stock_mode	own
36	_stock	200
36	_stock_status	instock
36	_backorders	no
36	_manage_stock	yes
36	_tribe_ticket_capacity	200
36	ticket_price	89
36	edd_price	89.00
36	_tribe_ticket_version	5.6.0-dev
36	_tribe_tickets_ar_iac	none
36	_tribe_tickets_meta	a:0:{}
36	_type	series_pass
36	_ticket_start_date	2023-05-04 00:00:00

### Observations
1. EDD Tickets are EDD Products (post_type `download`).
2. Tickets are built on the meta for those downloads.
3. EDD uses that meta internally and relies on that meta to be there to run queries.
4. The meta `edd_price` is used and handled by EDD; the meta `ticket_price` is used and handle by ET+.