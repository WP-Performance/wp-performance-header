import { registerBlockType } from '@wordpress/blocks'
import { withSelect } from '@wordpress/data'
import ServerSideRender from '@wordpress/server-side-render'
import { __ } from '@wordpress/i18n'
import { useBlockProps } from '@wordpress/block-editor'

registerBlockType('wp-performance/header', {
  title: __('WP Performance Header', 'wp-performance-header'),
  description: __(
    'This plugin allows you to display logo',
    'wp-performance-header',
  ),
  icon: 'format-image',
  category: 'theme-blocks',
  example: {},
  attributes: {},
  edit: (props) => {
    const blockProps = useBlockProps()
    return (
      <div {...useBlockProps()}>
        <ServerSideRender
          block="wp-performance/header"
          attributes={{ ...props.attributes }}
        />
      </div>
    )
  },
  // save
})
