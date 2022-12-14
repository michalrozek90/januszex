<?php
/**
 * Attributes File.
 *
 * @since 2.0.0
 *
 * @package uagb
 */

$cta_border_attribute        = UAGB_Block_Helper::uag_generate_border_attribute( 'btn' );
$second_cta_border_attribute = UAGB_Block_Helper::uag_generate_border_attribute( 'secondCta' );

return array_merge(
	array(
		'classMigrate'                    => false,
		'inheritFromTheme'                => false,
		'textAlign'                       => 'left',
		'titleColor'                      => '',
		'descColor'                       => '',
		'ctaPosition'                     => 'right',
		'titleTag'                        => '',
		'titleFontSize'                   => '',
		'titleFontSizeType'               => 'px',
		'titleFontSizeMobile'             => '',
		'titleFontSizeTablet'             => '',
		'titleFontFamily'                 => '',
		'titleFontWeight'                 => '',
		'titleLineHeightType'             => 'em',
		'titleLineHeight'                 => '',
		'titleLineHeightTablet'           => '',
		'titleLineHeightMobile'           => '',
		'titleLoadGoogleFonts'            => false,
		'descFontSize'                    => '',
		'descFontSizeType'                => 'px',
		'descFontSizeMobile'              => '',
		'descFontSizeTablet'              => '',
		'descFontFamily'                  => '',
		'descFontWeight'                  => '',
		'descLineHeightType'              => 'em',
		'descLineHeight'                  => '',
		'descLineHeightTablet'            => '',
		'descLineHeightMobile'            => '',
		'descLoadGoogleFonts'             => false,
		'titleSpace'                      => 10,
		'titleSpaceTablet'                => '',
		'titleSpaceMobile'                => '',
		'titleSpaceType'                  => 'px',
		'descSpace'                       => 10,
		'descSpaceTablet'                 => '',
		'descSpaceMobile'                 => '',
		'descSpaceType'                   => 'px',
		'buttonAlign'                     => '',
		'ctaTarget'                       => false,
		'ctaIconPosition'                 => 'after',
		'ctaIconSpace'                    => 5,
		'ctaIconSpaceTablet'              => '',
		'ctaIconSpaceMobile'              => '',
		'ctaType'                         => 'button',
		'ctaLink'                         => '#',
		'ctaFontSize'                     => 14,
		'ctaFontSizeType'                 => 'px',
		'ctaFontSizeMobile'               => '',
		'ctaFontSizeTablet'               => '',
		'ctaFontFamily'                   => '',
		'ctaFontWeight'                   => '',
		'ctaLoadGoogleFonts'              => false,
		'ctaBtnLinkColor'                 => '',
		'ctaBgColor'                      => '',
		'ctaBgHoverColor'                 => '',
		'ctaBtnVertPadding'               => '',
		'ctaBtnHrPadding'                 => '',
		'stack'                           => 'tablet',
		'stackBtn'                        => 'none',
		'showTitle'                       => true,
		'showDesc'                        => true,
		'ctaLeftSpace'                    => 0,
		'ctaLeftSpaceTablet'              => '',
		'ctaLeftSpaceMobile'              => '',
		'ctaLeftSpaceType'                => 'px',
		'ctaRightSpace'                   => 0,
		'ctaRightSpaceTablet'             => '',
		'ctaRightSpaceMobile'             => '',
		'ctaRightSpaceType'               => 'px',
		'contentWidth'                    => 70,
		'contentWidthTablet'              => '',
		'contentWidthMobile'              => '',
		'contentWidthType'                => '%',
		'ctaLinkHoverColor'               => '',
		'ctaTopPaddingTablet'             => '',
		'ctaRightPaddingTablet'           => '',
		'ctaBottomPaddingTablet'          => '',
		'ctaLeftPaddingTablet'            => '',
		'ctaTopPaddingMobile'             => '',
		'ctaRightPaddingMobile'           => '',
		'ctaBottomPaddingMobile'          => '',
		'ctaLeftPaddingMobile'            => '',
		'ctaPaddingUnit'                  => 'px',
		'mobileCTAPaddingUnit'            => 'px',
		'tabletCTAPaddingUnit'            => 'px',
		'ctaPaddingLink'                  => '',
		'titleTransform'                  => '',
		'titleDecoration'                 => '',
		'descTransform'                   => '',
		'descDecoration'                  => '',
		'ctaTransform'                    => '',
		'ctaDecoration'                   => '',
		'titleFontStyle'                  => '',
		'descFontStyle'                   => '',
		'ctaFontStyle'                    => '',
		'secondCtaFontFamily'             => '',
		'secondCtaLoadGoogleFonts'        => false,
		'secondCtaFontWeight'             => '',
		'secondCtaFontStyle'              => '',
		'secondCtaFontTransform'          => '',
		'secondCtaFontDecoration'         => '',
		'secondCtaTopPadding'             => '',
		'secondCtaRightPadding'           => '',
		'secondCtaBottomPadding'          => '',
		'secondCtaLeftPadding'            => '',
		'secondCtaTopMobilePadding'       => '',
		'secondCtaRightMobilePadding'     => '',
		'secondCtaBottomMobilePadding'    => '',
		'secondCtaLeftMobilePadding'      => '',
		'secondCtaTopTabletPadding'       => '',
		'secondCtaRightTabletPadding'     => '',
		'secondCtaBottomTabletPadding'    => '',
		'secondCtaLeftTabletPadding'      => '',
		'secondCtaPaddingUnit'            => 'px',
		'secondCtaMobilePaddingUnit'      => 'px',
		'secondCtaTabletPaddingUnit'      => 'px',
		'secondCtaPaddingLink'            => '',
		'secondCtaColor'                  => '',
		'secondCtaBackground'             => '',
		'secondCtaHoverColor'             => '',
		'secondCtaHoverBackground'        => '',
		'secondCtaFontSize'               => 14,
		'secondCtaFontSizeType'           => 'px',
		'secondCtaFontSizeMobile'         => 'px',
		'secondCtaFontSizeTablet'         => 'px',
		'secondCtaIcon'                   => '',
		'secondCtaIconPosition'           => 'right',
		'secondCtaIconSpace'              => 10,
		'secondCtaIconSpaceTablet'        => '',
		'secondCtaIconSpaceMobile'        => '',
		'stackBtn'                        => 'none',
		'gapBtn'                          => 15,
		'gapBtnTablet'                    => '',
		'gapBtnMobile'                    => '',
		'textAlignTablet'                 => 'center',
		'textAlignMobile'                 => 'center',
		'overallBlockTopPadding'          => '',
		'overallBlockRightPadding'        => '',
		'overallBlockBottomPadding'       => '',
		'overallBlockLeftPadding'         => '',
		'overallBlockTopMobilePadding'    => '',
		'overallBlockRightMobilePadding'  => '',
		'overallBlockBottomMobilePadding' => '',
		'overallBlockLeftMobilePadding'   => '',
		'overallBlockTopTabletPadding'    => '',
		'overallBlockRightTabletPadding'  => '',
		'overallBlockBottomTabletPadding' => '',
		'overallBlockLeftTabletPadding'   => '',
		'overallBlockPaddingUnit'         => 'px',
		'overallBlockMobilePaddingUnit'   => 'px',
		'overallBlockTabletPaddingUnit'   => 'px',
		'overallBlockPaddingLink'         => '',
		'overallBlockTopMargin'           => '',
		'overallBlockRightMargin'         => '',
		'overallBlockBottomMargin'        => '',
		'overallBlockLeftMargin'          => '',
		'overallBlockTopMobileMargin'     => '',
		'overallBlockRightMobileMargin'   => '',
		'overallBlockBottomMobileMargin'  => '',
		'overallBlockLeftMobileMargin'    => '',
		'overallBlockTopTabletMargin'     => '',
		'overallBlockRightTabletMargin'   => '',
		'overallBlockBottomTabletMargin'  => '',
		'overallBlockLeftTabletMargin'    => '',
		'overallBlockMarginUnit'          => 'px',
		'overallBlockMobileMarginUnit'    => 'px',
		'overallBlockTabletMarginUnit'    => 'px',
		'overallBlockMarginLink'          => '',
		'buttonRightSpace'                => 5,
		'buttonRightSpaceTablet'          => '',
		'buttonRightSpaceMobile'          => '',
		'buttonRightSpaceType'            => 'px',
		'titleLetterSpacing'              => '',
		'titleLetterSpacingTablet'        => '',
		'titleLetterSpacingMobile'        => '',
		'titleLetterSpacingType'          => 'px',
		'descLetterSpacing'               => '',
		'descLetterSpacingTablet'         => '',
		'descLetterSpacingMobile'         => '',
		'descLetterSpacingType'           => 'px',
		'ctaLetterSpacing'                => '',
		'ctaLetterSpacingTablet'          => '',
		'ctaLetterSpacingMobile'          => '',
		'ctaLetterSpacingType'            => 'px',
		'secondCtaLetterSpacing'          => '',
		'secondCtaLetterSpacingTablet'    => '',
		'secondCtaLetterSpacingMobile'    => '',
		'secondCtaLetterSpacingType'      => 'px',
	),
	$second_cta_border_attribute,
	$cta_border_attribute
);
