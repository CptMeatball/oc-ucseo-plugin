# User Centered SEO Plugin
Plugin for OctoberCMS that provides extensive SEO tools manageable by endusers in an user friendly way.

## Author
@Rebel59/CptMeatball - Antonie Hogewoning

## Current Status
Ready for v1.0 deployment. Writing documentation.

### Main Features Roadmap for v1.0
- [x] Generate SEO Page set for pages present in the CMS part of OctoberCMS
- [x] Build components that hook into page without any hassle
- [x] Write user friendly descriptions for all meta tags.
- [x] Provide complete list of Open Graph Properties and Rules with CRUD possibilities
- [x] Form relations between OpenGraph Rules and SEO Page
- [x] Provide basic Twitter tags
- [x] SEO Analyzer/checker for each SEO Page
- [x] SEO Analyzer initialized on pageload
- [x] Provide Multilanguage support for SeoPage

### Roadmap v1.1
- [ ] Support for dynamic pages
- [ ] Schema.org (JSONLD) support
- [ ] Advanced Twitter tags
- [ ] Display fancy _SEO Score_

## Installation
Install plugin through the OctoberCMS marketplace.

## Usage
1. Place the *UC SEO* component in your layout, inside the ````<head>```` tag.
2. Go to SEO section inside OctoberCMS.
3. Press _Generate SEO pages_
4. Fill in the fields.

## FAQ
**Will this break when I change my URLs?**
_Yes it most certainly will. UC SEO references the URL that is accessed and compares it to entries in the database. So yeah, you change the URL, you break the SEO. So update your URLs in the SEO section!_

**Does this support Translatable plugin?**
_Yup!_

**Why aren't there any keywords?**
_As this plugin tries to be "User Centered", keywords are not included. This is because most users will stuff the entire section full of awfulness, which doesn't help just one bit._

**Will keywords ever be included?**
_No._

**Wow! X breaks when I do Y! You suck!**
_Unfortunately, I'm merely human. Please (https://github.com/CptMeatball/oc-ucseo-plugin/issues/new)[submit an issue]._
