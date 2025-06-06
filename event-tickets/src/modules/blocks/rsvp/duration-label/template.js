/**
 * External dependencies
 */
import React from 'react';
import PropTypes from 'prop-types';

/**
 * WordPress dependencies
 */
import { Dashicon } from '@wordpress/components';
import { __ } from '@wordpress/i18n';

/**
 * Internal dependencies
 */
import { LabelWithTooltip } from '../../../elements';
import './style.pcss';

const tooltipLabel = <Dashicon className="tribe-editor__rsvp-duration__duration-tooltip-label" icon="info-outline" />;

const RSVPDurationLabel = ( { tooltipDisabled } ) => (
	<LabelWithTooltip
		className="tribe-editor__rsvp-duration__duration-label"
		label={ __( 'RSVP Duration', 'event-tickets' ) }
		tooltipDisabled={ tooltipDisabled }
		tooltipLabel={ tooltipLabel }
		// @TODO: get tooltip text based on post type
		tooltipText={ __(
			'By default, sales will begin as soon as you save the ticket and end when the event begins',
			'event-tickets'
		) }
	/>
);

RSVPDurationLabel.propTypes = {
	tooltipDisabled: PropTypes.bool,
};

export default RSVPDurationLabel;
