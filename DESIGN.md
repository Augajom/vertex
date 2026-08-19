---
name: "VERTEX CAPITAL Design System"
description: "Dark Regal Angular Design System for Regulated Financial Services"
colors:
  primary: "#6644ec"
  primary-hover: "#7a5df2"
  primary-active: "#5534dc"
  secondary: "#2f5eeb"
  secondary-hover: "#4b75f0"
  secondary-active: "#1e4bd6"
  accent-transition: "#4b52ec"
  neutral-bg: "#0b1b34"
  surface-card: "#112344"
  surface-elevated: "#1a2a47"
  text-primary: "#ffffff"
  text-secondary: "#cbd5e1"
  text-highlight: "#8ab4f8"
  text-badge: "#c4b5fd"
  border-subtle: "rgba(102, 68, 236, 0.25)"
  border-highlight: "rgba(102, 68, 236, 0.45)"
typography:
  display:
    fontFamily: "'LINESeedSansTH', 'Prompt', 'Raleway', sans-serif"
    fontSize: "clamp(2rem, 5vw, 3rem)"
    fontWeight: 700
    lineHeight: 1.2
    letterSpacing: "0.05em"
  headline:
    fontFamily: "'LINESeedSansTH', 'Prompt', 'Raleway', sans-serif"
    fontSize: "1.75rem"
    fontWeight: 700
    lineHeight: 1.3
    letterSpacing: "0.05em"
  title:
    fontFamily: "'LINESeedSansTH', 'Prompt', 'Raleway', sans-serif"
    fontSize: "1.25rem"
    fontWeight: 600
    lineHeight: 1.4
    letterSpacing: "0.025em"
  body:
    fontFamily: "'LINESeedSansTH', 'Prompt', 'Sarabun', 'Source Sans Pro', sans-serif"
    fontSize: "1rem"
    fontWeight: 300
    lineHeight: 1.7
    letterSpacing: "normal"
  label:
    fontFamily: "'LINESeedSansTH', 'Prompt', 'Raleway', sans-serif"
    fontSize: "0.8rem"
    fontWeight: 700
    lineHeight: 1
    letterSpacing: "0.1em"
  icons:
    fontFamily: "'Font Awesome 5 Free', 'Font Awesome 5 Brands'"
rounded:
  xs: "4px"
  sm: "5px"
  md: "6px"
  lg: "8px"
  full: "100%"
spacing:
  xs: "0.5em"
  sm: "1em"
  md: "1.5em"
  lg: "2.5em"
  xl: "4em"
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.text-primary}"
    rounded: "{rounded.sm}"
    padding: "0 2.25em"
    height: "3.75em"
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-special:
    backgroundColor: "{colors.secondary}"
    textColor: "{colors.text-primary}"
    rounded: "{rounded.sm}"
    padding: "0 2.25em"
    height: "3.75em"
  button-special-hover:
    backgroundColor: "{colors.secondary-hover}"
  card-feature:
    backgroundColor: "{colors.surface-card}"
    rounded: "{rounded.md}"
    padding: "2em"
---

# Design System: VERTEX CAPITAL

## Overview

**Creative North Star: "The Regal Midnight Vault"**

VERTEX CAPITAL ผสานความมั่นคงทางกฎหมายและการเงินเข้ากับสุนทรียภาพยุคใหม่ โดยใช้สถาปัตยกรรม Dark Polygonal สไตล์ Solid State ที่เน้นความโปร่งใส ทรงพลัง และมีเกียรติ ทุกส่วนประกอบสื่อสารความน่าเชื่อถือในฐานะผู้ให้บริการสินเชื่อ PICO Finance ภายใต้การกำกับดูแลของกระทรวงการคลัง

บรรยากาศโดยรวมมีความสุขุม ลุ่มลึก และเฉียบคม (Deep Midnight Navy) ขับเน้นด้วยพลังสีม่วงรอยัล (Royal Violet) สำหรับการกระทำหลัก และสีน้ำเงินไซเบอร์ (Cyber Royal Blue) สำหรับสถานะการกำกับดูแลและการนำทาง โดยเน้นโครงสร้างเรขาคณิตมุมเฉียงอันเป็นเอกลักษณ์

**Key Characteristics:**
- **สถาปัตยกรรมมุมเฉียง (Polygonal Geometry)**: ขอบรอยต่อระหว่าง Section ตัดเฉียงด้วยมุมเรขาคณิต เสริมพลังและทิศทางการเล่าเรื่อง
- **การจัดระดับชั้นข้อมูลแบบมีชั้นเชิง (Tonal Hierarchy)**: ใช้ความสว่างและเฉดน้ำเงิน-ม่วงในการแยกแยะข้อมูลสำคัญ
- **ความเรียบง่ายที่ชัดเจน (Crisp Precision)**: ปุ่ม ไอคอน และเส้นตารางมีความคมชัด ไร้ลูกเล่นฟุ่มเฟือย

## Colors

ชุดสีหลักเป็นการจับคู่ระหว่างความลุ่มลึกของสีกรมท่ารัตติกาลกับสีม่วงรอยัลและน้ำเงินไซเบอร์ที่โดดเด่น

### Primary
- **Royal Violet** (`#6644ec`): สีหลักของแบรนด์ ใช้สำหรับปุ่ม Call-to-Action หลัก (ดาวน์โหลดแอป), ป้ายบอกขั้นตอน (Step Counter), แท็บที่เลือกอยู่ (Active Tab) และ Spotlight ประจำส่วนเกี่ยวกับเรา

### Secondary
- **Cyber Royal Blue** (`#2f5eeb`): สีรอง ใช้สำหรับปุ่มตรวจสอบใบอนุญาต (Check License Button), ส่วนกำกับดูแล (Governance Spotlight), ลิงก์ และโฮเวอร์ของเมนู
- **Violet-Blue Transition** (`#4b52ec`): สีเชื่อมโยงระหว่างสีหลักและสีรอง ใช้สำหรับ Spotlight ส่วนผลิตภัณฑ์สินเชื่อ

### Neutral
- **Deep Midnight Navy** (`#0b1b34`): พื้นหลังหลักของทั้งเว็บไซต์ (Body Canvas), โครงสร้างหลัก (Wrapper Header) และส่วนท้าย (Footer)
- **Dark Navy Container** (`#112344`): พื้นหลังของการ์ดขั้นตอนการสมัคร (Features Article), กล่องเงื่อนไขคุณสมบัติ และแผงเมนูแบบสไลด์
- **Pure White** (`#ffffff`): สีตัวอักษรของหัวข้อใหญ่ (Heading) และข้อความที่ต้องการความคมชัดสูงสุด
- **Soft Cyber Blue** (`#8ab4f8`): สีไฮไลต์ข้อความสำคัญ คำขวัญรอง และวงเงิน/อัตราดอกเบี้ย
- **Muted Lavender** (`#c4b5fd`): สีข้อความเน้นใบอนุญาตและคำอธิบายพิเศษ
- **Slate Text** (`#cbd5e1`): สีเนื้อหาทั่วไปและข้อความหมายเหตุ

### Named Rules
**The Authority Accent Rule.** สี `#2f5eeb` ใช้เฉพาะองค์ประกอบที่เกี่ยวข้องกับความน่าเชื่อถือ ใบอนุญาต และการกำกับดูแล เพื่อตอกย้ำความถูกต้องทางกฎหมายอย่างสม่ำเสมอ  
**The Primary Restraint Rule.** สีม่วง `#6644ec` ต้องสงวนไว้สำหรับ Action ที่นำไปสู่การสมัคร/ดาวน์โหลด และตัวระบุตำแหน่ง เพื่อไม่ให้แย่งความสนใจจากเนื้อหาหลัก

## Typography

**Display/Heading Font:** `LINESeedSansTH`, `Prompt`, `Raleway`, sans-serif  
**Body Font:** `LINESeedSansTH`, `Prompt`, `Sarabun`, `Source Sans Pro`, sans-serif  

**Character:** การจับคู่ระหว่างฟอนต์ทรงเรขาคณิตร่วมสมัย (`LINESeedSansTH`, `Prompt`) ที่ให้ความรู้สึกมั่นคง ชัดเจน อ่านง่ายทั้งภาษาไทยและอังกฤษ ร่วมกับฟอนต์เนื้อหาที่เน้นการจัดระยะบรรทัดที่สบายตา

### Hierarchy
- **Display** (Bold 700, `clamp(2rem, 5vw, 3rem)`, line-height 1.2): ใช้สำหรับหัวข้อหลัก Hero Banner
- **Headline** (Bold 700, `1.75rem`, line-height 1.3, letter-spacing `0.05em`, Uppercase): ใช้สำหรับชื่อ Section หลัก (`h2.major`) มีเส้นขอบล่างตัดผ่าน
- **Title** (Semi-bold 600, `1.25rem`, line-height 1.4): ใช้สำหรับหัวข้อย่อย และชื่อขั้นตอน
- **Body** (Light/Regular 300-400, `1rem`, line-height 1.65-1.75): ใช้สำหรับคำอธิบายและเนื้อหาสัญญาทางกฎหมาย
- **Label** (Bold 700, `0.75rem-0.85rem`, letter-spacing `0.1em`, Uppercase): ใช้สำหรับป้ายบอกขั้นตอน (Step Badge) และปุ่มกด

### Named Rules
**The Legibility First Rule.** เนื้อหาสัญญาและนโยบายทางกฎหมายต้องรักษาระยะห่างบรรทัดไม่ต่ำกว่า `1.7` เพื่อให้อ่านเข้าใจได้ง่ายและโปร่งใส

## Layout

- **โครงสร้างหน้าเดี่ยว (Single Landing Page)**: เล่าเรื่องต่อเนื่องตั้งแต่ Hero Banner -> เกี่ยวกับเรา -> พันธกิจ -> ผลิตภัณฑ์ -> ขั้นตอนการสมัคร -> การกำกับดูแลและนโยบาย -> ติดต่อเรา
- **ระยะห่าง (Spacing Rhythm)**: ใช้ระยะความกว้าง Container `55em` (หรือ `100%` บนหน้าจอขนาดเล็ก) พร้อมระยะห่างระหว่าง Section `6.5em` บน Desktop และ `2.5em` บน Mobile
- **รอยต่อเฉียง (Angular Section Slopes)**: ใช้ SVG Polygon รอยต่อขนาด `height: 6.5em` สลับทิศทางซ้าย-ขวาเพื่อสร้างมิติความลึก

## Elevation & Depth

ระบบใช้ **Tonal Layering & Dark Glassmorphism** แทนการใช้เงาลอยแบบดั้งเดิม:
- พื้นผิวระนาบที่ 0: Midnight Canvas `#0b1b34`
- พื้นผิวระนาบที่ 1 (Spotlights & Dividers): ไล่เฉด `#6644ec`, `#2f5eeb`, `#4b52ec`
- พื้นผิวระนาบที่ 2 (Containers & Cards): Dark Navy `#112344` พร้อมขอบเส้นแสง `1px solid rgba(102, 68, 236, 0.25)`
- แผงควบคุมลอย (Drawer Panel): เงาลึก `0 15px 40px rgba(0, 0, 0, 0.6)` พร้อมพื้นหลังกึ่งโปร่งใส

## Shapes

- **มุมขอบปุ่ม (Button Radius)**: มนเล็กน้อย `5px` ให้ความรู้สึกกระชับ ทรงพลัง
- **มุมขอบการ์ดและกล่องเนื้อหา (Card Radius)**: มนกลมกลืน `6px` ถึง `8px`
- **มุมขอบป้ายขั้นตอน (Step Badge Radius)**: มนกะทัดรัด `4px`
- **รูปภาพประกอบ Spotlight**: รูปทรงวงกลมสมบูรณ์แบบ `border-radius: 100%` สะท้อนเอกลักษณ์ของ Solid State

## Components

### Buttons
- **Primary Button (`.button.primary`)**: พื้นหลัง `#6644ec`, ตัวอักษรสีขาวตัวหนา, ความสูง `3.75em`, โฮเวอร์เปลี่ยนเป็น `#7a5df2`
- **Special Button (`.button.special`)**: พื้นหลัง `#2f5eeb`, ตัวอักษรสีขาวตัวหนา, โฮเวอร์เปลี่ยนเป็น `#4b75f0`
- **Standard Button (`.button`)**: พื้นหลังโปร่งใส ขอบกล่องสีขาว `box-shadow: inset 0 0 0 2px rgba(255,255,255,0.125)`

### Cards & Feature Articles
- **Feature Card (`.features article`)**: พื้นหลัง `#112344`, ขอบ `1px solid rgba(102, 68, 236, 0.25)`, รัศมี `6px`, มีเอฟเฟกต์ยกตัว `translateY(-2px)` และเปลี่ยนสีขอบเป็น `#6644ec` เมื่อโฮเวอร์

### Navigation Drawer
- **Menu Panel (`#menu`)**: แผงเลื่อนเปิดกึ่งโปร่งแสง มีหัวข้อเมนูและลิงก์นำทางที่เลื่อนอัตโนมัติพร้อมปิดหน้าต่าง

### Interactive Legal Tabs
- **Solid Tabs (`.solid-tabs`)**: กลุ่มปุ่มแท็บสำหรับสลับอ่านเอกสาร PDPA, ข้อกำหนด และสัญญาเงินกู้ พร้อมกล่องเลื่อนอ่านแบบ Scrollable (`max-height: 550px`)

## Do's and Don'ts

### Do:
- **Do** ใช้สี `#6644ec` สำหรับปุ่ม Action สำคัญที่สุด (เริ่มสมัคร / ดาวน์โหลดแอป) เท่านั้น
- **Do** แสดงข้อมูลอัตราดอกเบี้ย วงเงิน และเลขที่ใบอนุญาตอย่างเด่นชัดและโปร่งใส
- **Do** ใช้ฟอนต์ภาษาไทย (`LINESeedSansTH` หรือ `Prompt`) ทุกจุดของเว็บไซต์เพื่อความสม่ำเสมอ
- **Do** รักษารอยต่อเฉียง (Polygonal Wrappers) สลับทิศทางระหว่าง Section อย่างกลมกลืน

### Don't:
- **Don't** ตัดทอน ดัดแปลง หรือแก้ไขเนื้อหาจาก [Content.md](file:///C:/xampp/htdocs/vertex/Content.md) โดยเด็ดขาด
- **Don't** ใช้เอฟเฟกต์เงาสว่างจ้า (Neon Glow) เกินความจำเป็น เพื่อคงความเป็นสถาบันการเงินที่น่าเชื่อถือ
- **Don't** ใช้พื้นหลังสีขาวสว่างจ้าหรือกริดตารางตัดสายตา
- **Don't** เปลี่ยนโครงสร้าง Single Landing Page ไปเป็นหลายหน้าย่อยโดยไม่จำเป็น
