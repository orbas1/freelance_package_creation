// SvgIcons.js
import React from 'react';
import Svg, { Defs, G, Path, ClipPath, Circle, Rect,Pattern,Use,Image } from 'react-native-svg';

export const Arrowforward = ({ IconColor }) => (
    <Svg
        xmlns="http://www.w3.org/2000/svg"
        width={18}
        height={18}
        viewBox="0 0 18 18"
        fill="none"
    >
        <Path
            d="M7.5 4.5L12 9l-4.5 4.5"
            stroke={IconColor}
            strokeWidth={1.5}
            strokeLinecap="round"
            strokeLinejoin="round"
        />
    </Svg>
);

export const CloseEye = ({ iconColor, height, width }) => (
    <Svg
        xmlns="http://www.w3.org/2000/svg"
        width={width}
        height={height}
        viewBox="0 0 20 20"
        fill="none"
    >
        <Path
            opacity={0.7}
            d="M2.5 2.5l2.355 2.355M17.5 17.5l-2.355-2.355m0 0c-1.287.895-2.988 1.522-5.145 1.522-5.833 0-8.333-4.584-8.333-6.667 0-1.313.993-3.62 3.188-5.145m10.29 10.29l-3.377-3.377M4.855 4.855l3.377 3.377m0 0a2.5 2.5 0 103.536 3.536M8.232 8.232l3.536 3.536m5.248 1.565c.103-.138.2-.277.29-.416.698-1.076 1.027-2.161 1.027-2.917 0-2.083-2.5-6.667-8.333-6.667-.914 0-1.746.113-2.5.31-.142.038-.28.078-.417.121"
            stroke={iconColor}
            strokeWidth={1.5}
            strokeLinecap="round"
        />
    </Svg>
);

export const OpenEye = ({ iconColor, height, width }) => (
    <Svg
        xmlns="http://www.w3.org/2000/svg"
        width={width}
        height={height}
        viewBox="0 0 20 20"
        fill="none"
    >
        <G opacity={0.7} stroke={iconColor} strokeWidth={1.3}>
            <Path d="M1.862 10.83c3.884 7.81 12.391 7.81 16.276 0 .26-.523.26-1.137 0-1.66-3.885-7.81-12.392-7.81-16.276 0a1.864 1.864 0 000 1.66z" />
            <Path d="M12.503 10a2.492 2.492 0 11-4.985 0 2.492 2.492 0 014.985 0z" />
        </G>
    </Svg>
);

export const PresentationIcon = ({ IconColor }) => (
    <Svg xmlns="http://www.w3.org/2000/svg" width={20} height={20} viewBox="0 0 20 20" fill="none">
        <Path
            opacity={0.7}
            d="M2.5 1.667h15m-15 0v6.778c0 1.71 0 2.566.333 3.22.293.575.76 1.042 1.335 1.335.654.333 1.51.333 3.22.333h5.223c1.711 0 2.567 0 3.22-.333a3.056 3.056 0 001.336-1.335c.333-.654.333-1.51.333-3.22V1.667m-15 0H1.25m16.25 0h1.25M10 13.333v2.5m0 0l-4.167 2.5m4.167-2.5l4.167 2.5M10 15.833v2.5m-3.334-10l2.5-1.666 1.667 1.666 2.5-1.666"
            stroke={IconColor}
            strokeWidth={1.5}
            strokeLinecap="round"
            strokeLinejoin="round"
        />
    </Svg>
);

export const BrifeCaseIcon = ({ iconColor, strokeWidth, height, width }) => (
    <Svg
        xmlns="http://www.w3.org/2000/svg"
        width={width}
        height={height}
        viewBox="0 0 12 12"
        fill="none"
    >
        <Path
            d="M1.602 3.528A4.968 4.968 0 006 6.156a4.966 4.966 0 004.394-2.63m-6.373-.569C4.021 1.863 4.905.98 6 .98c1.094 0 1.978.884 1.978 1.978M7.777 5.18v1.694m-3.332 0V5.179M3.002 2.957h5.996a2 2 0 012 2v4.064a2 2 0 01-2 2H3.002a2 2 0 01-2-2V4.957a2 2 0 012-2z"
            stroke={iconColor}
            strokeMiterlimit={10}
            strokeLinecap="round"
        />
    </Svg>
);

export const Users = ({ iconColor, strokeWidth, height, width }) => (
    <Svg
        xmlns="http://www.w3.org/2000/svg"
        width={height}
        height={width}
        viewBox="0 0 12 12"
        fill="none"
    >
        <Path
            d="M7.776 2.096c.586 0 1.062.614 1.062 1.37 0 .279-.066.54-.176.755-.19.37-.517.614-.886.614M9.514 6.61c.317-.32.79-.329 1.136-.017.288.262.534.599.705.946.22.446.182.98-.066 1.41-.377.654-.946 1.112-1.715 1.247M6.216 2.748c0 .356-.107.69-.282.964a1.682 1.682 0 01-1.413.784c-.59 0-1.11-.313-1.413-.784a1.793 1.793 0 01-.282-.964c0-.964.76-1.748 1.695-1.748s1.695.784 1.695 1.748zM4.526 11c1.146 0 2.23-.346 3.075-.926.833-.572 1.185-1.709.66-2.589a4.372 4.372 0 00-.617-.797c-.467-.483-1.275-.565-1.89-.23-.357.191-.771.3-1.223.3-.451 0-.866-.109-1.222-.3-.616-.335-1.386-.214-1.891.23-.315.277-.567.653-.748 1.03-.372.778-.113 1.69.571 2.193.87.64 2.094 1.089 3.285 1.089z"
            stroke={iconColor}
            strokeMiterlimit={10}
            strokeLinecap="round"
            strokeLinejoin="round"
        />
    </Svg>
);

export const SingleUser = ({ iconColor, strokeWidth, height, width }) => (
    <Svg
        xmlns="http://www.w3.org/2000/svg"
        width={width}
        height={height}
        viewBox="0 0 16 16"
        fill="none"
    >
        <Path
            d="M9.816 3.935a2.185 2.185 0 11-4.37 0 2.185 2.185 0 014.37 0zM12.454 9.857c.676 1.1.222 2.52-.852 3.236-1.09.724-2.487 1.157-3.965 1.157-1.535 0-3.114-.56-4.235-1.36-.881-.63-1.216-1.77-.736-2.741.234-.472.558-.943.964-1.29.651-.554 1.644-.705 2.439-.287.459.24.993.377 1.575.377s1.117-.137 1.575-.377c.795-.418 1.836-.315 2.439.288.299.299.573.634.796.997z"
            stroke={iconColor}
            strokeWidth={1.3}
            strokeMiterlimit={10}
            strokeLinecap="round"
            strokeLinejoin="round"
        />
    </Svg>
);

export const Planet = ({ iconColor, strokeWidth, height, width }) => (
    <Svg
        xmlns="http://www.w3.org/2000/svg"
        width={width}
        height={height}
        viewBox="0 0 16 16"
        fill="none"
    >
        <Path
            d="M3.859 11.578a5.152 5.152 0 003.75 1.609 5.195 5.195 0 005.19-5.19c0-.192-.008-.385-.037-.578m-8.903 4.159c1.334-.237 2.98-.771 4.692-1.572 1.705-.793 3.173-1.712 4.21-2.587M3.86 11.578c-1.565.282-2.684.148-2.966-.452-.228-.487.143-1.204.94-1.999.37-.369.555-.884.574-1.406.077-2.087 1.635-4.029 3.609-4.664a5.248 5.248 0 014.743.822c.396.301.888.467 1.384.42 1.148-.109 1.951.069 2.183.563.281.6-.349 1.55-1.565 2.557"
            stroke={iconColor}
            strokeWidth={1.3}
            strokeMiterlimit={10}
        />
    </Svg>
);

export const Flag = ({ iconColor, strokeWidth, height, width }) => (
    <Svg
        xmlns="http://www.w3.org/2000/svg"
        width={width}
        height={height}
        viewBox="0 0 16 16"
        fill="none"
    >
        <Path
            d="M2.756 2.133v11.734m5.759-3.8c1.168-.44 1.932-.523 2.705-.406.561.084 1.036-.486.758-.982L10.89 6.736a.625.625 0 010-.612l1.492-2.646a.61.61 0 00-.354-.89c-1.107-.317-1.947-.364-3.513.219-1.402.538-2.022.533-3.096.24a.636.636 0 00-.811.605v5.992c0 .255.155.487.395.574 1.27.463 2.17.52 3.512-.151z"
            stroke={iconColor}
            strokeWidth={1.3}
            strokeMiterlimit={10}
            strokeLinecap="round"
            strokeLinejoin="round"
        />
    </Svg>
);

export const Dollar = ({ iconColor, strokeWidth, height, width }) => (
    <Svg
        xmlns="http://www.w3.org/2000/svg"
        width={width}
        height={height}
        viewBox="0 0 8 11"
        fill="none"
    >
        <Path
            d="M1.019 7.62c0 1.103 1.352 2.176 2.79 2.176 1.718 0 3.11-.863 3.188-2.184 0-3.191-5.994-1.009-5.994-4.185-.008-1.322 1.088-2.224 2.799-2.224 1.422 0 3.195.7 3.195 2.24M4.003 10.5v-.705m0-8.593V.498"
            stroke={iconColor}
            strokeMiterlimit={10}
            strokeLinecap="round"
        />
    </Svg>
);

export const HourglassIcon = ({ IconColor }) => (
    <Svg
        xmlns="http://www.w3.org/2000/svg"
        width={20}
        height={20}
        viewBox="0 0 20 20"
        fill="none"
    >
        <G clipPath="url(#clip0_8951_27835)">
            <Path
                opacity={0.7}
                d="M10 6.667V10l2.5 1.667M3.334.833l-2.5 2.5m15.833-2.5l2.5 2.5M18.333 10a8.333 8.333 0 11-16.666 0 8.333 8.333 0 0116.666 0z"
                stroke={IconColor}
                strokeWidth={1.5}
                strokeLinecap="round"
                strokeLinejoin="round"
            />
        </G>
        <Defs>
            <ClipPath id="clip0_8951_27835">
                <Path fill="#fff" d="M0 0H20V20H0z" />
            </ClipPath>
        </Defs>
    </Svg>
);

export const MoneyCartIcon = ({ IconColor }) => (
    <Svg
        xmlns="http://www.w3.org/2000/svg"
        width={20}
        height={20}
        viewBox="0 0 20 20"
        fill="none"
    >
        <Path
            opacity={0.7}
            d="M.833.833h.417v0c.338 0 .507 0 .658.02.795.107 1.477.62 1.798 1.356.06.14.107.302.2.627l.142.497m0 0l1.606 5.621c.363 1.271.544 1.907.915 2.378.327.417.757.74 1.247.941.556.227 1.217.227 2.538.227h2.579c1.337 0 2.006 0 2.566-.231a3.056 3.056 0 001.252-.957c.37-.48.546-1.124.898-2.415l.255-.932c.43-1.575.644-2.362.462-2.984a2.292 2.292 0 00-1-1.308c-.552-.34-1.368-.34-3-.34H4.048zM10 16.667a1.667 1.667 0 11-3.333 0 1.667 1.667 0 013.333 0zm6.667 0a1.667 1.667 0 11-3.334 0 1.667 1.667 0 013.334 0z"
            stroke={IconColor}
            strokeWidth={1.5}
            strokeLinecap="round"
            strokeLinejoin="round"
        />
    </Svg>
);

export const CheckIconWithBg = ({ IconColor }) => (
    <Svg
        xmlns="http://www.w3.org/2000/svg"
        width={25}
        height={24}
        viewBox="0 0 25 24"
        fill="none"
    >
        <Path
            opacity={0.7}
            fillRule="evenodd"
            clipRule="evenodd"
            d="M2.077 12c0-5.937 4.813-10.75 10.75-10.75S23.577 6.063 23.577 12s-4.813 10.75-10.75 10.75S2.077 17.937 2.077 12zm15.236-2.514a.687.687 0 10-.972-.972l-4.514 4.514-1.514-1.514a.687.687 0 10-.972.972l2 2a.687.687 0 00.972 0l5-5z"
            fill="#17B26A"
        />
    </Svg>
);


export const Cross = ({ IconColor }) => (
    <Svg
        xmlns="http://www.w3.org/2000/svg"
        width={20}
        height={20}
        viewBox="0 0 16 16"
        fill="none"
    >
        <Path
            opacity={0.8}
            d="M4.686 11.75l7.5-7.5m-7.5 0l7.5 7.5"
            stroke={IconColor}
            strokeWidth={1.5}
        />
    </Svg>
);

export const CrossWithCircle = ({ IconColor }) => (
    <Svg
        xmlns="http://www.w3.org/2000/svg"
        width={20}
        height={20}
        viewBox="0 0 16 16"
        fill="none"
    >
        <Path
            opacity={0.8}
            d="M6.125 9.875L8 8m0 0l1.875-1.875M8 8L6.125 6.125M8 8l1.875 1.875M14.25 8a6.25 6.25 0 11-12.5 0 6.25 6.25 0 0112.5 0z"
            stroke="#585858"
            strokeWidth={1.5}
        />
    </Svg>
);

export const Trash = ({ IconColor }) => (
    <Svg
        xmlns="http://www.w3.org/2000/svg"
        width={18}
        height={18}
        viewBox="0 0 18 18"
        fill="none"
    >
        <Path
            d="M3 3.75l.506 8.608c.086 1.458.129 2.187.44 2.74.274.487.69.88 1.192 1.124.57.278 1.3.278 2.76.278h2.203c1.46 0 2.19 0 2.761-.278a2.75 2.75 0 001.192-1.124c.311-.553.354-1.282.44-2.74L15 3.75m-12 0H1.5m1.5 0h12m0 0h1.5m-4.5 0l-.374-1.122c-.135-.405-.203-.608-.328-.758a1.031 1.031 0 00-.414-.298c-.182-.072-.396-.072-.823-.072H7.939c-.427 0-.641 0-.823.072-.16.063-.303.165-.414.298-.125.15-.193.353-.328.758L6 3.75M7.5 7.5v5.25m3-5.25v3"
            stroke={IconColor}
            strokeWidth={2}
            strokeLinecap="round"
            strokeLinejoin="round"
            opacity={0.7}
        />
    </Svg>
);

export const Plus = ({ IconColor }) => (
    <Svg
        xmlns="http://www.w3.org/2000/svg"
        width={18}
        height={18}
        viewBox="0 0 18 18"
        fill="none"
    >
        <Path
            opacity={0.7}
            d="M3.75 9H9m5.25 0H9m0 0V3.75M9 9v5.25"
            stroke={IconColor}
            strokeWidth={1.3}
            strokeLinecap="round"
            strokeLinejoin="round"
        />
    </Svg>
);

export const Calendar = ({ iconColor, height, width }) => (
    <Svg
        xmlns="http://www.w3.org/2000/svg"
        width={width}
        height={height}
        viewBox="0 0 12 12"
        fill="none"
    >
        <G clipPath="url(#clip0_8951_28244)">
            <Path
                opacity={0.8}
                d="M4 .5V2M8 .5V2M4 6h4m-4.6 5h5.2c.84 0 1.26 0 1.581-.164a1.5 1.5 0 00.655-.655C11 9.861 11 9.441 11 8.6V3.4c0-.84 0-1.26-.164-1.581a1.5 1.5 0 00-.655-.656C9.861 1 9.441 1 8.6 1H3.4c-.84 0-1.26 0-1.581.163a1.5 1.5 0 00-.656.656C1 2.139 1 2.559 1 3.4v5.2c0 .84 0 1.26.163 1.581a1.5 1.5 0 00.656.655c.32.164.74.164 1.581.164z"
                stroke={iconColor}
                strokeWidth={1.3}
            />
        </G>
        <Defs>
            <ClipPath id="clip0_8951_28244">
                <Path fill="#fff" d="M0 0H12V12H0z" />
            </ClipPath>
        </Defs>
    </Svg>
);

export const SearchFilter = ({ IconColor, strokeWidht, height, width }) => (
    <Svg
        xmlns="http://www.w3.org/2000/svg"
        width={width}
        height={height}
        viewBox="0 0 20 18"
        fill="none"
    >
        <Path
            d="M10 7.312V.652m0 16.696v-3.265m-6.668-3.395v6.66m0-16.696v3.265m13.336 6.771v6.66m0-16.696v3.265M1.477 6.377v-1.21c0-.69.56-1.25 1.25-1.25h1.21c.69 0 1.25.56 1.25 1.25v1.21c0 .69-.56 1.25-1.25 1.25h-1.21c-.69 0-1.25-.56-1.25-1.25zm6.668 6.456v-1.21c0-.69.56-1.25 1.25-1.25h1.21c.69 0 1.25.56 1.25 1.25v1.21c0 .69-.56 1.25-1.25 1.25h-1.21c-.69 0-1.25-.56-1.25-1.25zm6.668-6.456v-1.21c0-.69.56-1.25 1.25-1.25h1.21c.69 0 1.25.56 1.25 1.25v1.21c0 .69-.56 1.25-1.25 1.25h-1.21c-.69 0-1.25-.56-1.25-1.25z"
            stroke={IconColor}
            strokeWidth={strokeWidht}
            strokeMiterlimit={10}
            strokeLinecap="round"
            strokeLinejoin="round"
        />
    </Svg>
);


export const UploadePhoto = ({ IconColor }) => (
    <Svg
        xmlns="http://www.w3.org/2000/svg"
        width={19}
        height={18}
        viewBox="0 0 19 18"
        fill="none"
    >
        <Path
            opacity={0.7}
            d="M2.092 13.875l3.342-3.342c.538-.537.806-.806 1.117-.909.273-.09.567-.092.842-.006.312.098.584.363 1.13.892l2.559 2.485m5.26.27l-1.21-1.21c-.544-.544-.816-.816-1.13-.918a1.375 1.375 0 00-.85 0c-.314.102-.586.374-1.131.919l-.94.939m3.011 3.01l-3.01-3.01m2.635-6.245v-4.5m0 0l-1.875 1.875m1.875-1.875l1.875 1.875M9.217 1.5h-.9c-2.31 0-3.465 0-4.347.45a4.125 4.125 0 00-1.803 1.802c-.45.883-.45 2.038-.45 4.348v1.8c0 2.31 0 3.465.45 4.348A4.125 4.125 0 003.97 16.05c.882.45 2.037.45 4.347.45h1.8c2.31 0 3.466 0 4.348-.45a4.125 4.125 0 001.803-1.802c.45-.883.45-2.038.45-4.348V9"
            stroke="#585858"
            strokeWidth={1.3}
            strokeLinecap="round"
            strokeLinejoin="round"
        />
    </Svg>
);

export const arrowDown = ({ IconColor }) => (
    <Svg
        xmlns="http://www.w3.org/2000/svg"
        width={18}
        height={18}
        viewBox="0 0 18 18"
        fill="none"
    >
        <Path
            opacity={0.7}
            d="M4.5 6.75l4.5 4.5 4.5-4.5"
            stroke={IconColor}
            strokeWidth={1.3}
            strokeLinecap="round"
            strokeLinejoin="round"
        />
    </Svg>
);

export const Balance = ({ IconColor }) => (
    <Svg
        xmlns="http://www.w3.org/2000/svg"
        width={21}
        height={20}
        viewBox="0 0 21 20"
        fill="none"
    >
        <Path
            opacity={0.7}
            d="M2.91 6.667h15.834M5.827 10H9.16m-1.777 7.5h6.888c1.712 0 2.567 0 3.221-.333a3.056 3.056 0 001.335-1.335c.333-.654.333-1.51.333-3.22V7.388c0-1.711 0-2.567-.333-3.22a3.056 3.056 0 00-1.335-1.336c-.654-.333-1.51-.333-3.22-.333h-6.89c-1.71 0-2.566 0-3.22.333a3.055 3.055 0 00-1.335 1.335c-.333.654-.333 1.51-.333 3.22v5.223c0 1.711 0 2.567.333 3.22.293.576.76 1.043 1.335 1.336.654.333 1.51.333 3.22.333z"
            stroke={IconColor}
            strokeWidth={1.5}
            strokeLinecap="round"
            strokeLinejoin="round"
        />
    </Svg>
);

export const DashBoard = ({ IconColor }) => (
    <Svg
        xmlns="http://www.w3.org/2000/svg"
        width={19}
        height={18}
        viewBox="0 0 19 18"
        fill="none"
    >
        <Path
            opacity={0.7}
            d="M17.327 9a7.5 7.5 0 01-15 0m15 0a7.5 7.5 0 00-7.5-7.5m7.5 7.5h-1.5m-13.5 0a7.5 7.5 0 017.5-7.5M2.327 9h1.5m6-7.5V3m5.25.75l-.75.75m.75 9.75l-.75-.75m-9.75.75l.75-.75m-.75-9.75l.75.75m4.5 2.25s-1.5 1.111-1.5 2.667c0 2.444 3 2.444 3 0 0-1.556-1.5-2.667-1.5-2.667z"
            stroke={IconColor}
            strokeWidth={1.3}
            strokeLinecap="round"
            strokeLinejoin="round"
        />
    </Svg>
);

export const Profile = ({ IconColor }) => (
    <Svg
        xmlns="http://www.w3.org/2000/svg"
        width={19}
        height={18}
        viewBox="0 0 19 18"
        fill="none"
    >
        <G
            opacity={0.7}
            stroke={IconColor}
            strokeWidth={1.3}
            strokeLinecap="round"
            strokeLinejoin="round"
        >
            <Path d="M3.827 14.1a3.6 3.6 0 013.6-3.6h4.8a3.6 3.6 0 013.6 3.6v0a2.4 2.4 0 01-2.4 2.4h-7.2a2.4 2.4 0 01-2.4-2.4v0zM12.827 4.5a3 3 0 11-6 0 3 3 0 016 0z" />
        </G>
    </Svg>
);

export const CheckWithSquare = ({ IconColor }) => (
    <Svg
        xmlns="http://www.w3.org/2000/svg"
        width={19}
        height={18}
        viewBox="0 0 19 18"
        fill="none"
    >
        <Path
            opacity={0.7}
            d="M13.16 1.5H8.927c-2.31 0-3.465 0-4.348.45a4.125 4.125 0 00-1.802 1.802c-.45.883-.45 2.038-.45 4.348v1.8c0 2.31 0 3.465.45 4.348a4.125 4.125 0 001.802 1.802c.883.45 2.038.45 4.348.45h1.8c2.31 0 3.465 0 4.348-.45a4.125 4.125 0 001.802-1.802c.45-.883.45-2.038.45-4.348V8.167m-9.75.083l2.25 2.25 7.5-7.5"
            stroke={IconColor}
            strokeWidth={1.3}
            strokeLinecap="round"
            strokeLinejoin="round"
        />
    </Svg>
);

export const SwithchUserIcon = ({ IconColor }) => (
    <Svg
        xmlns="http://www.w3.org/2000/svg"
        width={21}
        height={20}
        viewBox="0 0 21 20"
        fill="none"
    >
        <Path
            d="M6.087 8.565l-3.593-3.58m0 0l3.593-3.581m-3.593 3.58h11.464m1.609 13.613l3.593-3.58m0 0l-3.593-3.581m3.593 3.58H7.696"
            stroke={IconColor}
            strokeWidth={1.14583}
            strokeMiterlimit={10}
            strokeLinecap="round"
            strokeLinejoin="round"
        />
    </Svg>
);

export const Chat = ({ IconColor }) => (
    <Svg
        xmlns="http://www.w3.org/2000/svg"
        width={19}
        height={18}
        viewBox="0 0 19 18"
        fill="none"
    >
        <Path
            opacity={0.7}
            d="M6.077 6h6m-6 3h3m5.787 6.772v0c.786.472 1.179.708 1.502.685.312-.02.597-.182.776-.439.185-.265.185-.724.185-1.64V7c0-1.925 0-2.888-.375-3.623a3.437 3.437 0 00-1.502-1.502c-.735-.375-1.698-.375-3.623-.375h-4c-1.925 0-2.888 0-3.623.375a3.437 3.437 0 00-1.502 1.502c-.375.735-.375 1.698-.375 3.623v2.5c0 1.925 0 2.888.375 3.623.33.647.855 1.173 1.502 1.502C4.939 15 5.902 15 7.827 15h4.249c.545 0 .817 0 1.082.042.26.04.513.11.756.21.25.1.483.24.95.52z"
            stroke={IconColor}
            strokeWidth={1.3}
            strokeLinecap="round"
            strokeLinejoin="round"
        />
    </Svg>
);


export const Refresh = ({ IconColor }) => (
    <Svg
        xmlns="http://www.w3.org/2000/svg"
        width={19}
        height={18}
        viewBox="0 0 19 18"
        fill="none"
    >
        <Path
            opacity={0.7}
            d="M3.077 15h10.2c1.155 0 1.733 0 2.174-.225.388-.197.703-.513.901-.901.225-.441.225-1.019.225-2.174v-1.2M3.077 15l2.25-2.25M3.077 15l2.25 2.25M16.577 3h-10.2c-1.155 0-1.733 0-2.174.225a2.063 2.063 0 00-.901.901c-.225.441-.225 1.019-.225 2.174v1.2m13.5-4.5L14.327.75M16.577 3l-2.25 2.25"
            stroke={IconColor}
            strokeWidth={1.3}
            strokeLinecap="round"
            strokeLinejoin="round"
        />
    </Svg>
);

export const Invoice = ({ IconColor }) => (
    <Svg
        xmlns="http://www.w3.org/2000/svg"
        width={19}
        height={18}
        viewBox="0 0 19 18"
        fill="none"
    >
        <Path
            opacity={0.7}
            d="M7.577 5.25v1.5A2.25 2.25 0 009.827 9v0a2.25 2.25 0 002.25-2.25v-1.5M9.665 16.5h.324c2.54 0 3.811 0 4.74-.51a4.126 4.126 0 001.815-2.02c.41-.977.276-2.24.008-4.767l-.195-1.83c-.218-2.058-.328-3.087-.795-3.867a4.125 4.125 0 00-1.806-1.624c-.824-.382-1.86-.382-3.93-.382v0c-2.07 0-3.104 0-3.929.382a4.125 4.125 0 00-1.806 1.624c-.466.78-.576 1.809-.794 3.867l-.195 1.83c-.268 2.527-.402 3.79.007 4.768.36.858 1 1.57 1.816 2.018.929.511 2.2.511 4.74.511z"
            stroke={IconColor}
            strokeWidth={1.3}
            strokeLinecap="round"
            strokeLinejoin="round"
        />
    </Svg>
);

export const Heart = ({ iconColor, strokeWidth, height, width }) => (
    <Svg
        xmlns="http://www.w3.org/2000/svg"
        width={width}
        height={height}
        viewBox="0 0 14 14"
        fill="none"
    >
        <G opacity={0.7} clipPath="url(#clip0_9410_49424)">
            <Path
                d="M12.028 2.797a3.154 3.154 0 01-.04 4.003L10.36 8.705 7.497 12.02a.648.648 0 01-.992 0L3.64 8.705 2.012 6.798a3.154 3.154 0 01-.042-4c1.271-1.559 3.612-1.346 4.613.42l.406.715c.005.01.018.01.023 0l.402-.71c1-1.768 3.34-1.984 4.614-.425z"
                stroke={iconColor}
                strokeWidth={strokeWidth}
                strokeMiterlimit={10}
            />
        </G>
        <Defs>
            <ClipPath id="clip0_9410_49424">
                <Path fill="#fff" d="M0 0H14V14H0z" />
            </ClipPath>
        </Defs>
    </Svg>
);

export const Reviews = ({ iconColor, strokeWidth, height, width }) => (
    <Svg
        xmlns="http://www.w3.org/2000/svg"
        width={width}
        height={height}
        viewBox="0 0 12 12"
        fill="none"
    >
        <Path
            d="M4.765 1.789C5.14.57 6.86.57 7.234 1.789l.45 1.466a.646.646 0 00.618.457h1.623c1.236 0 1.766 1.573.784 2.324l-1.39 1.062a.648.648 0 00-.225.706l.504 1.639c.37 1.204-1.02 2.175-2.019 1.41l-.795-.61a1.289 1.289 0 00-1.569 0l-.795.61c-1 .765-2.39-.206-2.02-1.41l.505-1.64a.648.648 0 00-.226-.705L1.29 6.036c-.982-.751-.452-2.324.784-2.324h1.623a.646.646 0 00.617-.457l.451-1.466z"
            stroke={iconColor}
            strokeMiterlimit={10}
            strokeLinecap="round"
            strokeLinejoin="round"
            opacity={0.8}
        />
    </Svg>
);

export const Location = ({ iconColor, strokeWidth, height, width }) => (
    <Svg
        xmlns="http://www.w3.org/2000/svg"
        width={height}
        height={width}
        viewBox="0 0 12 12"
        fill="none"
    >
        <Path
            d="M7.484 10.345l-.386-.319.386.319zm-2.967-.002l.386-.318-.386.318zM2.5 4.953a3.5 3.5 0 013.5-3.5v-1a4.5 4.5 0 00-4.5 4.5h1zm3.5-3.5a3.5 3.5 0 013.5 3.5h1A4.5 4.5 0 006 .453v1zm3.5 3.5c0 1.665-1.109 3.509-2.402 5.073l.77.637c1.31-1.585 2.632-3.667 2.632-5.71h-1zm-4.597 5.072C3.619 8.467 2.5 6.61 2.5 4.953h-1c0 2.035 1.333 4.131 2.63 5.708l.773-.636zm2.195.001a1.416 1.416 0 01-2.195-.001l-.772.636a2.416 2.416 0 003.738.002l-.77-.637zm.053-4.52c0 .635-.515 1.15-1.151 1.15v1a2.151 2.151 0 002.151-2.15h-1zM6 6.655a1.151 1.151 0 01-1.151-1.15h-1c0 1.187.963 2.15 2.151 2.15v-1zm-1.151-1.15c0-.637.515-1.152 1.151-1.152v-1a2.151 2.151 0 00-2.151 2.151h1zM6 4.353c.636 0 1.151.515 1.151 1.151h1A2.151 2.151 0 006 3.354v1z"
            fill={iconColor}
            opacity={0.8}
        />
    </Svg>
);

export const Logout = ({ IconColor }) => (
    <Svg
        xmlns="http://www.w3.org/2000/svg"
        width={19}
        height={18}
        viewBox="0 0 19 18"
        fill="none"
    >
        <Path
            opacity={0.7}
            d="M9.827 1.5V9m3-5.298a6.75 6.75 0 11-6 0"
            stroke={IconColor}
            strokeWidth={1.3}
            strokeLinecap="round"
        />
    </Svg>
);

export const SendChat = ({ IconColor }) => (
    <Svg
        xmlns="http://www.w3.org/2000/svg"
        width={19}
        height={18}
        viewBox="0 0 19 18"
        fill="none"
    >
        <G clipPath="url(#clip0_9223_9446)">
            <Path
                d="M8.75 9.75l.285.74c1.054 2.743 1.582 4.114 2.29 4.459a2 2 0 001.917-.09c.672-.41 1.068-1.825 1.86-4.655l1.114-3.976c.502-1.791.752-2.687.52-3.302a2 2 0 00-1.162-1.162c-.615-.233-1.51.018-3.302.52L8.296 3.397C5.466 4.19 4.05 4.586 3.64 5.258a2 2 0 00-.09 1.917c.345.708 1.716 1.235 4.459 2.29l.74.285zm0 0l1.875-1.875"
                stroke={IconColor}
                strokeWidth={1.7}
                strokeLinecap="round"
                strokeLinejoin="round"
            />
        </G>
        <Defs>
            <ClipPath id="clip0_9223_9446">
                <Path fill="#fff" transform="translate(.5)" d="M0 0H18V18H0z" />
            </ClipPath>
        </Defs>
    </Svg>
);

export const Recorder = ({ IconColor }) => (
    <Svg
        xmlns="http://www.w3.org/2000/svg"
        width={22}
        height={22}
        viewBox="0 0 22 22"
        fill="none"
    >
        <Path
            d="M11 17.417c3.143 0 7.334-2.75 7.334-7.334M11 17.417c-3.143 0-7.333-2.75-7.333-7.334M11 17.417v2.75m0-5.5a4.583 4.583 0 01-4.583-4.584V6.417a4.583 4.583 0 119.167 0v3.666A4.583 4.583 0 0111 14.667z"
            stroke={IconColor}
            strokeWidth={1.5}
            strokeLinecap="round"
            strokeLinejoin="round"
        />
    </Svg>
);


export const guestUser = () => (
    <Svg
        xmlns="http://www.w3.org/2000/svg"
        xmlnsXlink="http://www.w3.org/1999/xlink"
        width={25}
        height={24}
        viewBox="0 0 25 24"
        fill="none"
    >
        <G clipPath="url(#clip0_10030_26992)">
            <Path fill="url(#pattern0_10030_26992)" d="M0.5 0H24.5V24H0.5z" />
        </G>
        <Defs>
            <Pattern
                id="pattern0_10030_26992"
                patternContentUnits="objectBoundingBox"
                width={1}
                height={1}
            >
                <Use xlinkHref="#image0_10030_26992" transform="scale(.002)" />
            </Pattern>
            <ClipPath id="clip0_10030_26992">
                <Rect x={0.5} width={24} height={24} rx={12} fill="#fff" />
            </ClipPath>
            <Image
                id="image0_10030_26992"
                width={500}
                height={500}
                xlinkHref="data:image/png;base64,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"
            />
        </Defs>
    </Svg>

);

export const EmptyProject = () => (
    <Svg
        width={125}
        height={125}
        viewBox="0 0 125 125"
        fill="none"
        xmlns="http://www.w3.org/2000/svg"
    >
        <G id="Ellipse 3" opacity={0.3} filter="url(#filter0_d_9707_32556)">
            <Circle
                cx={62.3872}
                cy={27.3484}
                r={3.79569}
                stroke="#EE4710"
                strokeWidth={2.10153}
                shapeRendering="crispEdges"
            />
        </G>
        <Defs></Defs>
    </Svg>
);

export const EmptyTalent = () => (
    <Svg
        xmlns="http://www.w3.org/2000/svg"
        width={150}
        height={130}
        viewBox="0 0 150 130"
        fill="none"
    >
        <G clipPath="url(#clip0_9822_30467)">
            <G opacity={0.3} filter="url(#filter0_d_9822_30467)">
                <Circle
                    cx={45.2371}
                    cy={22.3465}
                    r={3.79569}
                    stroke="#EE4710"
                    strokeWidth={2.10153}
                    shapeRendering="crispEdges"
                />
            </G>
            <Circle
                opacity={0.8}
                cx={23.7807}
                cy={32.5791}
                r={2.75877}
                fill="#F2F2FF"
            />
            <Circle cx={98.2028} cy={105.312} r={1.81216} fill="#B3C5E8" />
            <G opacity={0.3} filter="url(#filter1_d_9822_30467)">
                <Path
                    d="M111.322 17l1.394 4.885 4.928-1.235-3.534 3.65 3.534 3.65-4.928-1.235-1.394 4.885-1.394-4.885L105 27.95l3.534-3.65L105 20.65l4.928 1.235L111.322 17z"
                    fill="#EE4710"
                />
            </G>
            <G opacity={0.4} filter="url(#filter2_d_9822_30467)">
                <Path
                    d="M28.69 61.5l1.64 5.044h5.303l-4.29 3.118 1.638 5.044-4.29-3.118-4.291 3.118 1.639-5.044-4.291-3.118h5.304L28.69 61.5z"
                    fill="#EE4710"
                />
            </G>
            <G filter="url(#filter3_dd_9822_30467)">
                <Path
                    d="M82.197 52.33a6.848 6.848 0 01-1.11 3.733c-1.194 1.823-3.246 3.032-5.571 3.032-2.325 0-4.378-1.209-5.572-3.032a6.848 6.848 0 01-1.11-3.732c0-3.733 2.995-6.765 6.682-6.765 3.686 0 6.681 3.032 6.681 6.765zM89.7 69.798c2.68 3.805 1.066 9.058-2.908 11.437-3.188 1.909-7.119 3.03-11.252 3.03-4.38 0-8.876-1.51-12.243-3.725-3.248-2.137-4.468-6.326-2.559-9.738.67-1.195 1.524-2.34 2.548-3.225 1.99-1.717 5.027-2.184 7.457-.89 1.403.742 3.037 1.166 4.818 1.166 1.78 0 3.414-.424 4.817-1.166 2.43-1.294 5.613-.975 7.457.89a17.6 17.6 0 011.866 2.221z"
                    fill="#fff"
                />
                <Path
                    d="M70.24 33.433a10.454 10.454 0 0110.565 0l19.934 11.652c3.269 1.91 5.283 5.442 5.283 9.263v23.304c0 3.821-2.014 7.352-5.283 9.263L80.805 98.567a10.452 10.452 0 01-10.566 0L50.305 86.915c-3.27-1.91-5.283-5.442-5.283-9.263V54.348c0-3.821 2.014-7.352 5.283-9.263l19.934-11.652z"
                    fill="#fff"
                />
                <Path
                    d="M82.197 52.33a6.848 6.848 0 01-1.11 3.733c-1.194 1.823-3.246 3.032-5.571 3.032-2.325 0-4.378-1.209-5.572-3.032a6.848 6.848 0 01-1.11-3.732c0-3.733 2.995-6.765 6.682-6.765 3.686 0 6.681 3.032 6.681 6.765zM89.7 69.798c2.68 3.805 1.066 9.058-2.908 11.437-3.188 1.909-7.119 3.03-11.252 3.03-4.38 0-8.876-1.51-12.243-3.725-3.248-2.137-4.468-6.326-2.559-9.738.67-1.195 1.524-2.34 2.548-3.225 1.99-1.717 5.027-2.184 7.457-.89 1.403.742 3.037 1.166 4.818 1.166 1.78 0 3.414-.424 4.817-1.166 2.43-1.294 5.613-.975 7.457.89a17.6 17.6 0 011.866 2.221z"
                    stroke="#BFBFFF"
                    strokeWidth={3.5}
                    strokeLinejoin="round"
                />
                <Path
                    d="M70.24 33.433a10.454 10.454 0 0110.565 0l19.934 11.652c3.269 1.91 5.283 5.442 5.283 9.263v23.304c0 3.821-2.014 7.352-5.283 9.263L80.805 98.567a10.452 10.452 0 01-10.566 0L50.305 86.915c-3.27-1.91-5.283-5.442-5.283-9.263V54.348c0-3.821 2.014-7.352 5.283-9.263l19.934-11.652z"
                    stroke="#BFBFFF"
                    strokeWidth={3.5}
                    strokeLinejoin="round"
                />
            </G>
            <Circle
                opacity={0.8}
                cx={119.328}
                cy={78.3062}
                r={1.80615}
                stroke="#E7C2B6"
            />
        </G>
        <Defs>
            <ClipPath id="clip0_9822_30467">
                <Path fill="#fff" d="M0 0H150V130H0z" />
            </ClipPath>
        </Defs>
    </Svg>
);

export const EmptyGigs = () => (
    <Svg
        xmlns="http://www.w3.org/2000/svg"
        width={150}
        height={130}
        viewBox="0 0 150 130"
        fill="none"
    >
        <G filter="url(#filter0_dd_9822_30483)">
            <Rect
                x={32.4365}
                y={31.4434}
                width={101.045}
                height={49.331}
                rx={7.14943}
                fill="#E4E4FA"
                shapeRendering="crispEdges"
            />
            <Rect
                x={41.969}
                y={43.3594}
                width={64.1066}
                height={4.05135}
                rx={2.02567}
                fill="#BFBFFF"
            />
            <Rect
                x={41.969}
                y={64.0918}
                width={45.2798}
                height={4.76628}
                rx={2.38314}
                fill="#EAEAEA"
            />
        </G>
        <G filter="url(#filter1_dd_9822_30483)">
            <Rect
                x={15.7544}
                y={53.6074}
                width={101.045}
                height={49.331}
                rx={7.14943}
                fill="#fff"
                shapeRendering="crispEdges"
            />
            <Rect
                x={25.2869}
                y={65.0469}
                width={81.9802}
                height={4.05135}
                rx={2.02567}
                fill="#E3E3E3"
            />
            <Rect
                x={25.2869}
                y={76.248}
                width={60.7702}
                height={4.05135}
                rx={2.02567}
                fill="#EAEAEA"
            />
            <Rect
                x={25.2869}
                y={87.4492}
                width={45.2798}
                height={4.05135}
                rx={2.02567}
                fill="#EAEAEA"
            />
        </G>
        <Path
            d="M23.745 41.443l-2.443 2.444 2.443 2.467a.718.718 0 010 1.047.718.718 0 01-1.047 0l-2.444-2.443-2.466 2.443a.718.718 0 01-1.048 0 .718.718 0 010-1.047l2.444-2.467-2.444-2.444a.718.718 0 010-1.047.718.718 0 011.048 0l2.466 2.444 2.444-2.444a.718.718 0 011.047 0 .718.718 0 010 1.047zM128.533 19.125l-2.077 2.077 2.077 2.097a.609.609 0 010 .89.61.61 0 01-.89 0l-2.077-2.077-2.097 2.077a.61.61 0 01-.89 0 .61.61 0 010-.89l2.077-2.097-2.077-2.077a.61.61 0 010-.89.61.61 0 01.89 0l2.097 2.077 2.077-2.077a.61.61 0 01.89 0 .609.609 0 010 .89z"
            fill="#BFBFFF"
        />
        <Path
            d="M132.808 96.403l-2.493 2.492 2.493 2.517a.733.733 0 010 1.068.733.733 0 01-1.068 0l-2.493-2.493-2.516 2.493a.733.733 0 01-1.068 0 .731.731 0 010-1.068l2.492-2.517-2.492-2.492a.731.731 0 010-1.068.732.732 0 011.068 0l2.516 2.492 2.493-2.492a.732.732 0 011.068 0 .733.733 0 010 1.068z"
            fill="#C1C1C1"
        />
        <Circle
            opacity={0.3}
            cx={18.0889}
            cy={112.664}
            r={1.82934}
            stroke="#0A74C6"
            strokeWidth={1.01284}
        />
        <Path
            d="M41.403 21.645a3.038 3.038 0 11-6.077 0 3.038 3.038 0 016.077 0z"
            fill="#fff"
            stroke="#BFBFFF"
            strokeWidth={1.01284}
        />
        <Defs></Defs>
    </Svg>
);

export const Success = ({ IconColor, height, width }) => (
    <Svg
        xmlns="http://www.w3.org/2000/svg"
        width={width}
        height={height}
        viewBox="0 0 70 70"
        fill="none"
    >
        <Rect width={70} height={70} rx={35} fill="#F6FEF9" />
        <Circle opacity={0.12} cx={35} cy={35} r={12.5} fill="#085D3A" />
        <Path
            d="M40.556 23.8A12.449 12.449 0 0035 22.5c-6.904 0-12.5 5.596-12.5 12.5S28.096 47.5 35 47.5 47.5 41.904 47.5 35c0-.47-.026-.933-.076-1.389m-16.174.139L35 37.5 47.5 25"
            stroke={IconColor}
            strokeWidth={1.5}
            strokeLinecap="round"
            strokeLinejoin="round"
        />
    </Svg>
);

export const EmptyDispute = () => (
    <Svg
        xmlns="http://www.w3.org/2000/svg"
        width={150}
        height={130}
        viewBox="0 0 150 130"
        fill="none"
    >
        <G clipPath="url(#clip0_9852_26976)">
            <G filter="url(#filter0_dd_9852_26976)">
                <Path
                    d="M24.978 10.982h56.157c6.825 0 12.48 5.655 12.48 12.48V60.9c0 7.02-5.655 12.479-12.48 12.479H51.887L36.093 85.273c-.975.78-2.145.78-3.315.39-.975-.585-1.56-1.56-1.56-2.925v-9.36h-6.24c-7.02 0-12.479-5.459-12.479-12.478V23.462c0-6.825 5.46-12.48 12.48-12.48z"
                    fill="#fff"
                />
            </G>
            <G filter="url(#filter1_dd_9852_26976)">
                <Path
                    d="M81.344 79.722c10.334 0 18.719-8.384 18.719-18.718v-24.96h24.959c6.824 0 12.479 5.656 12.479 12.48v37.438c0 7.02-5.655 12.48-12.479 12.48h-6.24v9.359c0 1.365-.78 2.34-1.755 2.925-1.17.39-2.34.39-3.315-.39L97.918 98.442H75.104c-7.02 0-12.479-5.46-12.479-12.48v-6.24h18.719z"
                    fill="#E4E4FA"
                />
            </G>
            <Rect
                x={20.584}
                y={30.2031}
                width={66.2957}
                height={3.27545}
                rx={1.63772}
                fill="#E3E3E3"
            />
            <Rect
                x={20.584}
                y={39.2578}
                width={49.1317}
                height={3.27545}
                rx={1.63772}
                fill="#EAEAEA"
            />
            <Rect
                x={20.584}
                y={48.3145}
                width={36.608}
                height={3.27545}
                rx={1.63772}
                fill="#EAEAEA"
            />
            <G opacity={0.4} filter="url(#filter2_d_9852_26976)">
                <Path
                    d="M107.569 17.19l1.639 5.044h5.304l-4.291 3.117 1.639 5.044-4.291-3.117-4.29 3.117 1.639-5.044-4.291-3.117h5.304l1.638-5.045z"
                    fill="#EE4710"
                />
            </G>
            <Circle
                opacity={0.3}
                cx={33.4268}
                cy={95.7164}
                r={2.8245}
                stroke="#0A74C6"
                strokeWidth={0.818862}
            />
            <Path
                d="M133.417 24.002a3.09 3.09 0 11-6.18.001 3.09 3.09 0 016.18-.001z"
                fill="#fff"
                stroke="#BFBFFF"
                strokeWidth={0.818862}
            />
            <G opacity={0.4} filter="url(#filter3_d_9852_26976)">
                <Path
                    d="M69.57 104.42l1.638 5.044h5.304l-4.29 3.118 1.638 5.044-4.29-3.118-4.291 3.118 1.639-5.044-4.291-3.118h5.303l1.64-5.044z"
                    fill="#EE4710"
                />
            </G>
            <G opacity={0.8} filter="url(#filter4_d_9852_26976)">
                <Circle
                    cx={131.846}
                    cy={110.348}
                    r={3.79569}
                    stroke="#9898EE"
                    strokeWidth={2.10153}
                    shapeRendering="crispEdges"
                />
            </G>
        </G>
        <Defs>
            <ClipPath id="clip0_9852_26976">
                <Path fill="#fff" d="M0 0H150V130H0z" />
            </ClipPath>
        </Defs>
    </Svg>
);


export const CrossWithCircleOOPS = ({ IconColor, height, width }) => (
    <Svg
        xmlns="http://www.w3.org/2000/svg"
        width={width}
        height={height}
        viewBox="0 0 16 16"
        fill="none"
    >
        <Path
            opacity={0.8}
            d="M6.125 9.875L8 8m0 0l1.875-1.875M8 8L6.125 6.125M8 8l1.875 1.875M14.25 8a6.25 6.25 0 11-12.5 0 6.25 6.25 0 0112.5 0z"
            stroke={IconColor}
            strokeWidth={1.5}
        />
    </Svg>
);



export const SettingsIcon = ({ width, height, IconColor }) => (
    <Svg
        xmlns="http://www.w3.org/2000/svg"
        width={25}
        height={24}
        viewBox="0 0 25 24"
        fill="none"
    >
        <Path
            d="M12.833 4c-.697 0-1.386-.263-1.813-.814l-.452-.583a2 2 0 00-2.581-.507L6.68 2.85a2 2 0 00-.851 2.489l.28.683c.263.645.146 1.37-.203 1.974v0c-.35.603-.922 1.073-1.613 1.168l-.73.1a2 2 0 00-1.73 1.98v1.51a2 2 0 001.73 1.98l.73.1c.69.095 1.263.566 1.613 1.168v0c.349.604.466 1.329.202 1.974l-.28.683a2 2 0 00.852 2.49l1.307.753a2 2 0 002.58-.507l.453-.583c.427-.551 1.116-.813 1.813-.813v0c.697 0 1.387.262 1.814.813l.452.583a2 2 0 002.581.507l1.307-.754a2 2 0 00.85-2.489l-.278-.683c-.264-.645-.147-1.37.202-1.974v0c.35-.602.922-1.073 1.612-1.167l.73-.1a2 2 0 001.73-1.982v-1.508a2 2 0 00-1.73-1.982l-.73-.1c-.69-.094-1.263-.564-1.612-1.167v0c-.35-.604-.466-1.329-.202-1.974l.279-.683a2 2 0 00-.852-2.49l-1.306-.753a2 2 0 00-2.58.507l-.453.583C14.22 3.737 13.53 4 12.833 4v0z"
            stroke="#585858"
            strokeWidth={1.63636}
            strokeLinecap="round"
            strokeLinejoin="round"
        />
        <Path
            d="M15.833 11.999a3 3 0 11-6 0 3 3 0 016 0z"
            stroke={IconColor}
            strokeWidth={1.63636}
            strokeLinecap="round"
            strokeLinejoin="round"
        />
    </Svg>
);


export const SearchIcon = ({ }) => (
    <Svg
        xmlns="http://www.w3.org/2000/svg"
        width={25}
        height={24}
        viewBox="0 0 25 24"
        fill="none"
    >
        <Path
            d="M21.167 21l-3.636-3.636m0 0A9 9 0 104.803 4.636 9 9 0 0017.53 17.364z"
            stroke="#585858"
            strokeWidth={1.63636}
            strokeLinecap="round"
        />
    </Svg>
);

export const HomeIcon = ({ }) => (
    <Svg
        xmlns="http://www.w3.org/2000/svg"
        width={25}
        height={24}
        viewBox="0 0 24 24"
        fill="none"
    >
        <Path
            d="M15 22v-7.067c0-1.026 0-1.54-.2-1.932A1.834 1.834 0 0014 12.2c-.392-.2-.906-.2-1.933-.2h-.133c-1.027 0-1.54 0-1.932.2A1.834 1.834 0 009.2 13c-.2.392-.2.906-.2 1.932V22M7.419 3.665L4.752 5.798c-1.01.809-1.516 1.213-1.88 1.715a4.583 4.583 0 00-.708 1.473C2 9.583 2 10.23 2 11.525v3.142c0 2.567 0 3.85.5 4.83A4.583 4.583 0 004.501 21.5c.98.5 2.264.5 4.831.5h5.333c2.567 0 3.85 0 4.831-.5a4.583 4.583 0 002.003-2.003c.5-.98.5-2.263.5-4.83v-3.142c0-1.295 0-1.942-.165-2.54a4.584 4.584 0 00-.708-1.472c-.363-.502-.869-.906-1.88-1.715l-2.666-2.133c-1.635-1.308-2.452-1.962-3.36-2.213a4.583 4.583 0 00-2.443 0c-.907.25-1.724.905-3.36 2.213z"
            stroke="#585858"
            strokeWidth={1.5}
            strokeLinecap="round"
            strokeLinejoin="round"
        />
    </Svg>
);

export const HomeIconFocused = ({ }) => (
    <Svg
        xmlns="http://www.w3.org/2000/svg"
        width={28}
        height={24}
        viewBox="0 0 25 24"
        fill="none"
    >
        <G clipPath="url(#clip0_8902_27375)" fill="#EE4710">
            <Path
                opacity={0.32}
                fillRule="evenodd"
                clipRule="evenodd"
                d="M17.997 3.437c-1.962-1.57-2.943-2.354-4.03-2.655a5.5 5.5 0 00-2.934 0c-1.087.3-2.068 1.085-4.03 2.655l-1.95 1.56c-1.213.97-1.82 1.455-2.256 2.057a5.5 5.5 0 00-.85 1.768c-.197.717-.197 1.493-.197 3.047v2.08c0 3.08 0 4.621.6 5.798a5.5 5.5 0 002.403 2.403c1.177.6 2.717.6 5.797.6h3.9c3.08 0 4.62 0 5.797-.6a5.5 5.5 0 002.404-2.403c.599-1.177.599-2.717.599-5.797v-2.081c0-1.554 0-2.33-.198-3.047a5.5 5.5 0 00-.849-1.768c-.436-.602-1.043-1.087-2.256-2.057l-1.95-1.56z"
            />
            <Path d="M12.567 11h-.134c-1.026 0-1.54 0-1.932.2A1.834 1.834 0 009.7 12c-.2.392-.2.906-.2 1.932v5.6c0 .514 0 .77.1.966a.917.917 0 00.4.401c.197.1.453.1.967.1h3.066c.514 0 .77 0 .966-.1a.917.917 0 00.401-.4c.1-.197.1-.453.1-.967v-5.6c0-1.026 0-1.54-.2-1.932a1.834 1.834 0 00-.801-.801c-.392-.2-.906-.2-1.932-.2z" />
        </G>
        <Defs>
            <ClipPath id="clip0_8902_27375">
                <Path fill="#fff" transform="translate(.5)" d="M0 0H24V24H0z" />
            </ClipPath>
        </Defs>
    </Svg>
);

export const SearchIconFocused = ({ }) => (
    <Svg
        xmlns="http://www.w3.org/2000/svg"
        width={28}
        height={24}
        viewBox="0 0 25 24"
        fill="none"
    >
        <Path
            opacity={0.32}
            d="M11.5 1.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75a9.722 9.722 0 006.894-2.856A9.722 9.722 0 0021.25 11c0-5.385-4.365-9.75-9.75-9.75z"
            fill="#EE4710"
        />
        <Path
            fillRule="evenodd"
            clipRule="evenodd"
            d="M19.014 18.514a.688.688 0 01.972 0l2 2a.688.688 0 01-.972.972l-2-2a.688.688 0 010-.972z"
            fill="#EE4710"
        />
    </Svg>
);

export const SettingsIconFocused = ({ }) => (
    <Svg
        xmlns="http://www.w3.org/2000/svg"
        width={28}
        height={24}
        viewBox="0 0 25 24"
        fill="none"
    >
        <Path
            opacity={0.32}
            d="M10.804 2.115c-.44-.57-.66-.854-.927-1.024a1.833 1.833 0 00-1.32-.26c-.312.057-.623.237-1.246.597l-1.373.793c-.622.359-.933.538-1.137.778-.303.355-.459.81-.437 1.276.015.315.15.647.422 1.312l.262.64c.186.455.12.97-.126 1.396-.247.426-.66.743-1.149.81l-.683.093c-.712.097-1.067.146-1.348.29-.414.214-.73.577-.886 1.016-.106.298-.106.656-.106 1.374v1.587c0 .718 0 1.077.106 1.375.156.438.472.802.886 1.015.28.145.636.194 1.348.29l.683.094c.488.066.902.383 1.149.81.247.426.312.94.126 1.396l-.262.64c-.271.664-.407.996-.422 1.312-.022.465.134.921.437 1.275.204.24.515.42 1.136.779l1.374.793c.623.36.934.54 1.246.596.457.084.928-.008 1.32-.259.266-.17.486-.455.927-1.024l.423-.546c.301-.389.78-.59 1.273-.59.492 0 .972.201 1.273.59l.423.546c.44.569.66.853.927 1.024.392.25.863.343 1.32.26.312-.058.623-.238 1.246-.598l1.374-.792c.62-.36.931-.538 1.136-.779.303-.354.459-.81.437-1.276-.015-.315-.15-.647-.422-1.311l-.262-.64c-.186-.456-.12-.97.126-1.397.247-.426.66-.743 1.149-.81l.683-.093c.712-.096 1.067-.145 1.348-.29.414-.213.73-.577.886-1.015.106-.298.106-.657.106-1.375v-1.587c0-.717 0-1.076-.106-1.374a1.833 1.833 0 00-.886-1.015c-.28-.145-.636-.194-1.348-.29l-.683-.094c-.488-.067-.902-.384-1.149-.81-.247-.426-.312-.94-.126-1.397l.262-.64c.271-.663.407-.995.422-1.31a1.833 1.833 0 00-.437-1.277c-.205-.24-.515-.42-1.137-.778l-1.373-.793c-.623-.36-.934-.54-1.246-.597a1.833 1.833 0 00-1.32.26c-.266.17-.486.455-.927 1.024l-.423.545c-.301.39-.78.59-1.273.59-.492 0-.972-.2-1.273-.59l-.423-.545z"
            fill="#EE4710"
        />
        <Path d="M15.5 12a3 3 0 11-6 0 3 3 0 016 0z" fill="#EE4710" />
    </Svg>
);

